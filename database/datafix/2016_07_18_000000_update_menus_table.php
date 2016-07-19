<?php

use Illuminate\Database\Migrations\Migration;
use Laraveldaily\Quickadmin\Models\Menu;
use Laraveldaily\Quickadmin\Models\MenuRole;

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
                'id'        => 3,
                'position'  => 0,
                'name'      => 'BasicInformation',
                'title'     => 'Basic Information',
                'menu_type' => 2,
                'icon'      => 'fa-database',
                'parent_id' => NULL,
            ],
            [
                'id'        => 4,
                'position'  => 0,
                'name'      => 'MaritalStatus',
                'title'     => 'Marital Status',
                'menu_type' => 1,
                'icon'      => 'fa-database',
                'parent_id' => 3,
            ]
        ]);
        MenuRole::insert([
            [
                'menu_id'   => 3,
                'role_id'   => 1,
            ],
            [
                'menu_id'   => 4,
                'role_id'   => 1,
            ]
        ]);
    }
}
