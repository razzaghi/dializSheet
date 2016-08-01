<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateDescriptionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('description',function(Blueprint $table){
            $table->increments("id");
            $table->integer("patient_id")->references("id")->on("patient");
            $table->string("presentingSymptoms")->nullable();
            $table->string("historyPeresentIllness")->nullable();
            $table->string("pastDiseaseHistory")->nullable();
            $table->string("currentDrugtherapy")->nullable();
            $table->string("allergyTo")->nullable();
            $table->string("familyHistory")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('description');
    }

}