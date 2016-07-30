<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreatePatientTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('patient',function(Blueprint $table){
            $table->increments("id");
            $table->string("unitNumber");
            $table->string("family");
            $table->string("name");
            $table->string("fatherName")->nullable();
            $table->integer("gender_id")->references("id")->on("gender");
            $table->integer("maritalstatus_id")->references("id")->on("maritalstatus");
            $table->string("idNo");
            $table->tinyInteger("recordHosp")->default(0)->nullable();
            $table->string("numOfHosp")->nullable();
            $table->date("dateOfBirth")->nullable();
            $table->string("placeOfBirth")->nullable();
            $table->string("placeOfId")->nullable();
            $table->string("religion")->nullable();
            $table->integer("occupation_id")->references("id")->on("occupation")->nullable();
            $table->string("placeOfWork")->nullable();
            $table->string("address")->nullable();
            $table->string("phoneNumber")->nullable();
            $table->string("reffered")->nullable();
            $table->string("addressOfReffered")->nullable();
            $table->string("phoneOfReffered")->nullable();
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
        Schema::drop('patient');
    }

}