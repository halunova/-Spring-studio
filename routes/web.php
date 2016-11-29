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


Route::get('/','BaseController@getIndex'); 
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@postIndex');
//default route ������ ���������
Route::get('/{id}', 'StaticController@getIndex');
