<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'IndexController@showIndex');
Route::get('/input', 'InputController@showInput');
Route::post('/confirm', 'ConfirmController@showConfirm');
Route::post('/complete', 'CompleteController@showComplete');
