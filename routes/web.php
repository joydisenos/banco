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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//cuenta Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('cuenta','\App\Http\Controllers\CuentaController');
  Route::post('cuenta/{id}/update','\App\Http\Controllers\CuentaController@update');
  Route::get('cuenta/{id}/delete','\App\Http\Controllers\CuentaController@destroy');
  Route::get('cuenta/{id}/deleteMsg','\App\Http\Controllers\CuentaController@DeleteMsg');
});

//movimiento Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('movimiento','\App\Http\Controllers\MovimientoController');
  Route::post('movimiento/{id}/update','\App\Http\Controllers\MovimientoController@update');
  Route::get('movimiento/{id}/delete','\App\Http\Controllers\MovimientoController@destroy');
  Route::get('movimiento/{id}/deleteMsg','\App\Http\Controllers\MovimientoController@DeleteMsg');
});
