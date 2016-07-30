<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

class Addmission extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'addmission';
    
    protected $fillable = [
          'patient_id',
          'addmissionDate',
          'ward',
          'doctor',
          'addmissionType',
          'insuranceType',
          'insuranceNumber',
          'room',
          'bed'
    ];
    

    public static function boot()
    {
        parent::boot();

        Addmission::observe(new UserActionsObserver);
    }
    
    public function patient()
    {
        return $this->hasOne('App\Patient', 'id', 'patient_id');
    }


    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setAddmissionDateAttribute($input)
    {
        if($input != '') {
            $this->attributes['addmissionDate'] = Carbon::createFromFormat(config('quickadmin.date_format'), $input)->format('Y-m-d');
        }else{
            $this->attributes['addmissionDate'] = '';
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getAddmissionDateAttribute($input)
    {
        if($input != '0000-00-00') {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('quickadmin.date_format'));
        }else{
            return '';
        }
    }


    
}