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

Route::get('/test', function () { return  'Hello world'; });
Route::get('user/{name?}', function ($name=0) { return  'User'. $name; })->where(['name'=>'[A-Za-z0-9]+']); //перехватываем буквы числа