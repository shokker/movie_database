<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','MovieController@index');
Route::resource('movies','MovieController');
Route::resource('categories','CategoryController');
Route::get('/by_year/{year}','MovieController@by_year');
