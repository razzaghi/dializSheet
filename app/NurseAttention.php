<?php

namespace App;

use Faker\Provider\zh_TW\DateTime;
use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;
use Morilog\Jalali\jDateTime;

class NurseAttention extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'nurseattention';
    
    protected $fillable = [
          'patient_id',
          'dateTimeAtt',
          'nurse_id',
          'description'
    ];
    

    public static function boot()
    {
        parent::boot();

        NurseAttention::observe(new UserActionsObserver);
    }
    
    public function patient()
    {
        return $this->hasOne('App\Patient', 'id', 'patient_id');
    }


    public function nurse()
    {
        return $this->hasOne('App\Nurse', 'id', 'nurse_id');
    }


    
    
    /**
     * Set attribute to datetime format
     * @param $input
     */
    public function setDateTimeAttAttribute($input)
    {

        $date = explode("-",$input);
        $dres = implode("-",jDateTime::toGregorian($date[0], $date[1], $date[2]))." 00:00:00";

        if($input != '') {
            $this->attributes['dateTimeAtt'] = Carbon::createFromFormat(config('quickadmin.date_format') . ' ' . config('quickadmin.time_format'), $dres)->format('Y-m-d H:i:s');
        }else{
            $this->attributes['dateTimeAtt'] = '';
        }
    }

    /**
     * Get attribute from datetime format
     * @param $input
     *
     * @return string
     */
    public function getDateTimeAttAttribute($input)
    {
        $dateArr1 = explode(" ",$input);
        $dateArr2 =  explode("-",$dateArr1[0]);
        $date = implode("-",jDateTime::toJalali($dateArr2[0],$dateArr2[1],$dateArr2[2]));

        if($input != '0000-00-00') {
            $dateArr = Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('quickadmin.date_format') . ' ' .config('quickadmin.time_format'));
            return $date;
        }else{
            return '';
        }
    }


}