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
Route::get('movies','MovieController@index');
Route::get('movies/create','MovieController@create');
Route::post('movies/create','MovieController@postCreate');
Route::get('movies/{movie}','MovieController@show');
Route::post('movies/create_tmdb','MovieController@postCreate_tmdb');
Route::get('movies/{movie}/edit','MovieController@edit');
Route::put('movies/{movie}','MovieController@update');
Route::put('movies/update_tmdb/{movie}','MovieController@putUpdate_tmdb');
Route::get('movies/{movie}/delete','MovieController@delete');






Route::get('movies/category/create','MovieController@categoryCreate');
Route::post('movies/category/create','MovieController@categoryPostCreate');
Route::post('movies/filter/{category}','MovieController@categoryShow');





Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');