<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'patient';
    
    protected $fillable = [
          'unitNumber',
          'family',
          'name',
          'fatherName',
          'gender_id',
          'maritalstatus_id',
          'idNo',
          'recordHosp',
          'numOfHosp',
          'dateOfBirth',
          'placeOfBirth',
          'placeOfId',
          'religion',
          'occupation_id',
          'placeOfWork',
          'address',
          'phoneNumber',
          'reffered',
          'addressOfReffered',
          'phoneOfReffered'
    ];
    

    public static function boot()
    {
        parent::boot();

        Patient::observe(new UserActionsObserver);
    }
    
    public function gender()
    {
        return $this->hasOne('App\Gender', 'id', 'gender_id');
    }


    public function maritalstatus()
    {
        return $this->hasOne('App\MaritalStatus', 'id', 'maritalstatus_id');
    }


    public function occupation()
    {
        return $this->hasOne('App\Occupation', 'id', 'occupation_id');
    }


    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateOfBirthAttribute($input)
    {
        if($input != '') {
            $this->attributes['dateOfBirth'] = Carbon::createFromFormat(config('quickadmin.date_format'), $input)->format('Y-m-d');
        }else{
            $this->attributes['dateOfBirth'] = '';
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateOfBirthAttribute($input)
    {
        if($input != '0000-00-00') {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('quickadmin.date_format'));
        }else{
            return '';
        }
    }


    
}