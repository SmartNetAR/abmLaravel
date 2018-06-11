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

Route::get('/home', 'autosController@index');

Route::get('/new', 'autosController@create');

Route::get('autos.create','ClienteController@create');

Route::post('/guardarAuto', 'autoController@SaveCar');

// Route::post('/eliminar', 'autoController@deleteCar');

Route::get('/patente/{id}', function($id) {
    return "la id es $id";
});
