<?php

use Illuminate\Database\Migrations\Migration;
use Laraveldaily\Quickadmin\Models\Menu;

class UpdateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Menu::insert([
            [
                'name'      => 'BasicInformation',
                'title'     => 'Basic Information',
                'menu_type' => 2,
            ]
        ]);
    }
}
