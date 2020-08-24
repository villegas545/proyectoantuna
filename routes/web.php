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


Route::view('/inicio', 'inicio')->name('inicio');
// Route::get('/inicio', 'controlador_pagina@mostrar');
Route::view('/master', 'master')->name('master.');
Route::view('/pacasEx', 'pacasEx')->name('pacasEx');
Route::view('/Compras', 'Compras')->name('Compras');
Route::view('/Pagos', 'Pagos')->name('Pagos');
Route::view('/Comercializacion', 'Comercializacion')->name('Comercializacion');
Route::view('/Proceso', 'Proceso')->name('Proceso');

Route::get('/masterdepacas','MasterController@index');
Route::get('/masterdepacas/create','MasterController@create');

Route::resource('master', 'MasterController');

// ------------------------ABONOS------------------------------------------
Route::get('/abono','abonoController@vista');
Route::post('/abono','abonoController@create');
Route::get('/abono','abonoController@index');

Route::resource('abono', 'abonoController');
// ------------------------LOTE--------------------------------------------
Route::get('/lote/agregar/','LoteController@vista');
Route::post('/lote/','LoteController@create');
Route::get('/lote/{id}','LoteController@index');

Route::resource('lote', 'LoteController');

// ------------------------PRODUCTORES-------------------------------------
Route::get('/productor/agregar','ProductorController@vista');
Route::post('/productor','ProductorController@create');
Route::get('/productor','ProductorController@index');
Route::get('/productor','ProductorController@edit');

Route::get('user-list-excel', 'ProductorController@exportExcel')->name('productor.excel');

Route::resource('productor', 'ProductorController');

// ------------------------LIQUIDACION-------------------------------------
Route::get('/liquidar/agregar','LiquidacionController@vista');
Route::post('/liquidar','LiquidacionController@create');
Route::get('/liquidar/{id}','LiquidacionController@index');

Route::resource('liquidar', 'LiquidacionController');

// ---------------------TEMPORADAS-----------------------------------------
Route::get('/temporada/agregar','TemporadaController@vista');
Route::post('/temporada','TemporadaController@create');
Route::get('/temporada','TemporadaController@index');

Route::resource('temporada', 'TemporadaController');

// ---------------------CLIENTE--------------------------------------------
Route::get('/cliente/agregar','ClienteController@vista');
Route::post('/cliente','ClienteController@create');
Route::get('/cliente','ClienteController@index');

Route::resource('cliente', 'ClienteController');

// ---------------------COMERCIALIZACION-----------------------------------
Route::get('/comercializacion/agregar','ComercializacionController@vista');
Route::post('/comercializacion','ComercializacionController@create');
Route::get('/comercializacion','ComercializacionController@index');

Route::resource('comercializacion', 'ComercializacionController');

// ----------------------FACTURAS------------------------------------------
Route::get('/facturas/agregar','FacturasController@vista');
Route::post('/facturas','FacturasController@create');
Route::get('/facturas/{id}','FacturasController@index');

Route::resource('facturas', 'FacturasController');

// ----------------------PACAS---------------------------------------------
Route::get('/pacas/agregar','PacaController@vista');
Route::post('/pacas','PacaController@create');
Route::get('/pacas','PacaController@index');

Route::resource('pacas', 'PacaController');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
 Route::get('/', function () {
     return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

