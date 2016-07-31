<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateNurseAttentionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('nurseattention',function(Blueprint $table){
            $table->increments("id");
            $table->string("dateTimeAtt");
            $table->string("description");
            $table->integer("nurse_id")->references("id")->on("nurse");
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
        Schema::drop('nurseattention');
    }

}