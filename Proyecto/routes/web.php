<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('barbers', 'BarberController');
Route::get('borrarbarber/{id}', 'BarberController@destroy');
Route::get('editarturno/{id}', 'BarberController@edit');
Route::post('editarturnobd', 'BarberController@update');

