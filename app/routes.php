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


Route::get('/laravel_input', function()
{
    return View::make('laravel_input');
});

//Route::post('/issue36_confirm', function()
//{
//    return View::make('home.issue36_confirm');
//});
//
//Route::post('/issue36_complete', function()
//{
//    return View::make('home.issue36_complete');
//});
