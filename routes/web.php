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
Route::resource('autos','autosController');

Route::get('/', 'autosController@index');

Route::get('/json', 'autosController@getJson');

Route::get('apiId/{id}', 'autosController@apiId');
