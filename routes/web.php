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




Route::get('tabela', 'MusicasController@index')->name('index');
Route::get('/cadastrar', 'MusicasController@create')->name('cadastrar');
Route::post('/salvar', 'MusicasController@store')->name('salvar');