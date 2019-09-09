<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'student'],function (){
    Route::group(['prefix'=>'student-table'],function (){
        Route::get('list','StudentController@getList');
        Route::get('add','StudentController@getAdd');
        Route::post('add','StudentController@postAdd');
    });
});