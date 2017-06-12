<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//daftar tugas
Route::get('tugas', 'tugasController@index');
//buat tugas
Route::get('tugas/create','tugasController@create');
//simpan tugas
Route::post('tugas','tugasController@simpan');