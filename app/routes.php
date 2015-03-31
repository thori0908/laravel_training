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

Route::get('/', function()
{
    return View::make('laravel_index');
});


Route::get('/input', function()
{
    return View::make('input_issue36');
});

Route::post('/confirm', function()
{
    return View::make('confirm_issue36');
});

Route::post('/complete', function()
{
    return View::make('complete_issue36');
});
