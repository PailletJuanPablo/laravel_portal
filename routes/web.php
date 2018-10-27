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

Route::get('/', 'HomeController@index')->name('inicio');
Route::get('/escort/{id?}','HomeController@verEscort')->name("escort");
Route::get('/seccion/{query}','HomeController@verPorCategoria')->name('seccion');
Route::get('/genero/{genero}','HomeController@verPorGenero')->name('genero');
Route::get('/barrios','HomeController@verBarrios')->name('barrios');
Route::get('/ver_por_barrio/{barrio}','HomeController@verPorBarrio')->name('ver_por_barrio');