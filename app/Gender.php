<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Gender extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'gender';
    
    protected $fillable = ['title'];
    

    public static function boot()
    {
        parent::boot();

        Gender::observe(new UserActionsObserver);
    }
    
    
    
    
}