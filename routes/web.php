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

Route::get('/', function () {
    return view('welcome');
});

Route::get('solicitarpermiso', 'PermisoController@create');
Route::post('solicitarpermiso', 'PermisoController@store');

Route::get('procesarpermiso/{id}', 'ProcesarPermisoController@create');

Route::get('aceptarPermiso/{id}', 'AceptarPermisoController@create');
Route::get('rechazarPermiso/{id}', 'RechazarPermisoController@create');

Route::get('verpermiso/{id}', 'VerPermisoController@create');
Route::get('descargarpermiso/{id}', 'DescargarPermisoController@create');
