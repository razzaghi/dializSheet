<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateAddmissionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('addmission',function(Blueprint $table){
            $table->increments("id");
            $table->integer("patient_id")->references("id")->on("patient");
            $table->date("addmissionDate");
            $table->string("ward");
            $table->string("doctor")->nullable();
            $table->string("addmissionType")->nullable();
            $table->string("insuranceType")->nullable();
            $table->string("insuranceNumber")->nullable();
            $table->string("room")->nullable();
            $table->string("bed")->nullable();
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
        Schema::drop('addmission');
    }

}