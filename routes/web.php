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

Route::get('/', 'autoController@showCars');

Route::get('/home', 'autoController@showCars');

Route::get('/new', 'autoController@New');

Route::post('/guardarAuto', 'autoController@SaveCar');

// Route::post('/eliminar', 'autoController@deleteCar');

Route::get('/patente/{id}', function($id) {
    return "Estos son los datos de $id";
});
