<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {

// });

// return view('welcome');
Route::get('/products', 'App\Http\Controllers\ProductsController@index')->name('productos.index');
Route::get('/products/create', 'App\Http\Controllers\ProductsController@create')->name('productos.create');
Route::post('/products', 'App\Http\Controllers\ProductsController@store')->name('productos.store');
Route::get('/products/search', 'App\Http\Controllers\ProductsController@search')->name('productos.search');
