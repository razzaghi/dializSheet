<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'doctor';
    
    protected $fillable = [
          'name',
          'family',
          'mobile',
          'phone',
          'address'
    ];
    

    public static function boot()
    {
        parent::boot();

        Doctor::observe(new UserActionsObserver);
    }
    
    
    
    
}