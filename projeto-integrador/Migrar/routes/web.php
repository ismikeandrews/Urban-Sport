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
// paginas
Route::get('/', 'Paginas@index');
Route::get('/pagina/produto/{id}', 'Paginas@produto');
Route::get('/pagina/marca', 'Paginas@marca');
Route::get('/pagina/categoria', 'Paginas@categoria');
Route::get('/pagina/esporte', 'Paginas@esporte');
//orderBy
Route::get('/pagina/marca/ordenar/{id}', 'Paginas@orderMarca');
Route::get('/pagina/categoria/ordenar/{id}', 'Paginas@orderCategoria');
Route::get('/pagina/esporte/ordenar/{id}', 'Paginas@orderEsporte');

Auth::routes();

Route::get('/home', 'HomeController@index');
