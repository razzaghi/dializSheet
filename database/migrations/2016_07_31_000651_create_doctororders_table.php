<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateDoctorOrdersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('doctororders',function(Blueprint $table){
            $table->increments("id");
            $table->dateTime("dateTimeOrder");
            $table->text("description");
            $table->integer("doctor_id")->references("id")->on("doctor");
            $table->integer("nurse_id")->references("id")->on("nurse")->nullable();
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
        Schema::drop('doctororders');
    }

}