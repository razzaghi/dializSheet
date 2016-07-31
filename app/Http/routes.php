<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('patient/lastDializ/{id}', [
    'as' => 'lastDializ', 'uses' => 'Admin\PatientController@lastDializ'
]);

Route::get('admin/addmission/create/{id}', [
    'as' => 'create', 'uses' => 'Admin\AddmissionController@create'
]);

Route::get('admin/addmission/{id}', [
    'as' => 'index', 'uses' => 'Admin\AddmissionController@index'
]);

Route::get('admin/description/create/{id}', [
    'as' => 'create', 'uses' => 'Admin\DescriptionController@create'
]);

Route::get('admin/description/{id}', [
    'as' => 'index', 'uses' => 'Admin\DescriptionController@index'
]);

Route::get('admin/description/index/{id}', [
    'as' => 'index', 'uses' => 'Admin\DescriptionController@index'
]);

Route::get('admin/nurseattention/create/{id}', [
    'as' => 'create', 'uses' => 'Admin\NurseAttentionController@create'
]);

Route::get('admin/nurseattention/{id}', [
    'as' => 'index', 'uses' => 'Admin\NurseAttentionController@index'
]);

Route::get('admin/nurseattention/index/{id}', [
    'as' => 'index', 'uses' => 'Admin\NurseAttentionController@index'
]);
