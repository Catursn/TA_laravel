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
    return view('Home');
});

Route::get('/tanaman','HomeController@index');
Route::get('/tanaman2','HomeController@tanam2');
Route::get('/tambah','HomeController@tambah');
Route::post('/store','HomeController@store');
Route::post('/input','HomeController@input');
