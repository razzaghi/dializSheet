<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Description extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'description';
    
    protected $fillable = [
          'patient_id',
          'presentingSymptoms',
          'historyPeresentIllness',
          'pastDiseaseHistory',
          'currentDrugtherapy',
          'allergyTo',
          'familyHistory'
    ];
    

    public static function boot()
    {
        parent::boot();

        Description::observe(new UserActionsObserver);
    }
    
    public function patient()
    {
        return $this->hasOne('App\Patient', 'id', 'patient_id');
    }


    
    
    
}