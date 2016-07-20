<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class DiseaseCode extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'diseasecode';
    
    protected $fillable = ['title'];
    

    public static function boot()
    {
        parent::boot();

        DiseaseCode::observe(new UserActionsObserver);
    }
    
    
    
    
}