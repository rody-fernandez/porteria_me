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



//Ingreso
Route::resource('/','IngresoController');
Route::resource('ingresos','IngresoController');

Route::get     ('ingresos/add/{id}','IngresoController@show');
Route::get     ('ingresos/edit/{id}','IngresoController@edit');

Route::resource('relatorios/ingresos','IngresoController');
Route::resource('registros/ingresos','IngresoController');

//Relatorios
Route::resource('ingresos/relatorios/historiales','HistorialController');
Route::resource('relatorios/historiales','HistorialController');

//Registros
Route::resource('botones','BotonController');
Route::resource('cargos','CargoController');
Route::resource('empresas','EmpresaController');
Route::resource('motivos','MotivosController');
Route::resource('personas','PersonaController');
Route::resource('registros/personas','PersonaController');

Route::resource('servicios','ServicioController');
//Route::resource('almuerzos','AlmuerzoController');
Route::resource('almoso','AlmosoController');


Route::resource('salidas','SalidaController');

Route::get     ('index_libre','SalidaController@index_lb');
Route::get     ('libre','SalidaController@create_libre');

Route::get     ('index_almuerzo','SalidaController@index_alm');
Route::get     ('almuerzo','SalidaController@create_almuerzo');

Route::post    ('almuerzo','SalidaController@store1')         ->name('almuerzo');
Route::post    ('libre','SalidaController@store2')            ->name('libre');

