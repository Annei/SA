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

Route::get('/','UploadController@index');

Route::post('/store','UploadController@store')->name('upload.file');

Route::get('/show','UploadController@show');


    
Route::get('/', 'UploadController@descarga');

Route::get('delete/{id}', 'UploadController@deletefiles');

