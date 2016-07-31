<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

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
        if($input != '') {
            $this->attributes['dateTimeAtt'] = Carbon::createFromFormat(config('quickadmin.date_format') . ' ' . config('quickadmin.time_format'), $input)->format('Y-m-d H:i:s');
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
        if($input != '0000-00-00') {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('quickadmin.date_format') . ' ' .config('quickadmin.time_format'));
        }else{
            return '';
        }
    }


}