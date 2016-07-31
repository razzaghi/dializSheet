<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateDoctorOrderTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('doctororder',function(Blueprint $table){
            $table->increments("id");
            $table->integer("patient_id")->references("id")->on("patient");
            $table->dateTime("dateTimeOrder");
            $table->integer("doctor_id")->references("id")->on("doctor");
            $table->integer("nurse_id")->references("id")->on("nurse")->nullable();
            $table->text("description");
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
        Schema::drop('doctororder');
    }

}