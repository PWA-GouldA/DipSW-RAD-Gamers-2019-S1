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

Route::get('/','Pages@index');
Route::get('/about','Pages@about');

// This is used to show the layout only, remove when completed
Route::get('/layout', function () {return view('layout');});

// when http://domain/manufacturers is visited
// run the index method in the ManufacturersController
Route::get('/manufacturers', 'ManufacturersController@index');
Route::get('/manufacturers/{manufacturer}', 'ManufacturersController@show');


Route::get('/games', 'GameController@index');
Route::get('/games/{game}', 'GameController@show');