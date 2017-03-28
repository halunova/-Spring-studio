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
Route::get('/home/delete/{id}','HomeController@getDelete');
Route::get('/home/edit/{id}','HomeController@getEdit');
Route::post('/home/edit/{id}', 'HomeController@postEdit');
Route::get('/photo', 'PhotoController@index');
Route::get('/email', 'EmailController@email');
Route::get('/comment', 'CommentController@index');
Route::post('/comment', 'CommentController@postIndex');
Route::get('/category/{id}', 'PhotoController@getCategory');
//default route всегда последний
Route::get('/{id}', 'StaticController@getIndex');

