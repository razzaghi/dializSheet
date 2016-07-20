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
            ],
            [
                'id'        => 5,
                'position'  => 0,
                'name'      => 'Gender',
                'title'     => 'Gender',
                'menu_type' => 1,
                'icon'      => 'fa-database',
                'parent_id' => 3,
            ],
            [
                'id'        => 6,
                'position'  => 0,
                'name'      => 'Occupation',
                'title'     => 'Occupation',
                'menu_type' => 1,
                'icon'      => 'fa-database',
                'parent_id' => 3,
            ],
            [
                'id'        => 7,
                'position'  => 0,
                'name'      => 'KindOfAdm',
                'title'     => 'Kind Of Adm',
                'menu_type' => 1,
                'icon'      => 'fa-database',
                'parent_id' => 3,
            ],
            [
                'id'        => 8,
                'position'  => 0,
                'name'      => 'DiseaseCode',
                'title'     => 'Disease Code',
                'menu_type' => 1,
                'icon'      => 'fa-database',
                'parent_id' => 3,
            ],
            [
                'id'        => 9,
                'position'  => 0,
                'name'      => 'OperationCode',
                'title'     => 'Operation Code',
                'menu_type' => 1,
                'icon'      => 'fa-database',
                'parent_id' => 3,
            ],
            [
                'id'        => 10,
                'position'  => 0,
                'name'      => 'Condition',
                'title'     => 'Condition',
                'menu_type' => 1,
                'icon'      => 'fa-database',
                'parent_id' => 3,
            ],
            [
                'id'        => 11,
                'position'  => 0,
                'name'      => 'IntroductionLetter',
                'title'     => 'Introduction Letter',
                'menu_type' => 1,
                'icon'      => 'fa-database',
                'parent_id' => 3,
            ]
        ]);
    }
}
