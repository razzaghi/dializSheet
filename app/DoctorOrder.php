<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;
use Morilog\Jalali\jDateTime;

class DoctorOrder extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'doctororder';
    
    protected $fillable = [
          'patient_id',
          'dateTimeOrder',
          'doctor_id',
          'nurse_id',
          'description'
    ];
    

    public static function boot()
    {
        parent::boot();

        DoctorOrder::observe(new UserActionsObserver);
    }
    
    public function patient()
    {
        return $this->hasOne('App\Patient', 'id', 'patient_id');
    }


    public function doctor()
    {
        return $this->hasOne('App\Doctor', 'id', 'doctor_id');
    }


    public function nurse()
    {
        return $this->hasOne('App\Nurse', 'id', 'nurse_id');
    }


    
    
    /**
     * Set attribute to datetime format
     * @param $input
     */
    public function setDateTimeOrderAttribute($input)
    {
        $date = explode("-",$input);
        $dres = implode("-",jDateTime::toGregorian($date[0], $date[1], $date[2]))." 00:00:00";


        if($input != '') {
            $this->attributes['dateTimeOrder'] = Carbon::createFromFormat(config('quickadmin.date_format') . ' ' . config('quickadmin.time_format'), $dres)->format('Y-m-d H:i:s');
        }else{
            $this->attributes['dateTimeOrder'] = '';
        }
    }

    /**
     * Get attribute from datetime format
     * @param $input
     *
     * @return string
     */
    public function getDateTimeOrderAttribute($input)
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