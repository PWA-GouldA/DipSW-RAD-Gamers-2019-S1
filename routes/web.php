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

Route::get('/', function () {
    return view('welcome');
});

// when http://domain/manufacturers is visited
// run the index method in the ManufacturersController
Route::get('/manufacturers', 'ManufacturersController@index');
Route::get('/manufacturers/{manufacturer}', 'ManufacturersController@show');