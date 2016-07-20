<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class KindOfAdm extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'kindofadm';
    
    protected $fillable = ['title'];
    

    public static function boot()
    {
        parent::boot();

        KindOfAdm::observe(new UserActionsObserver);
    }
    
    
    
    
}