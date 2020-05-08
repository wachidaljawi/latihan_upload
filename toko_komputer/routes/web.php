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

/* route barang */
Route::get('/barang', 'BarangController@index')->name('barang.index');
Route::get('/barang/create', 'BarangController@create')->name('barang.create');
Route::post('/barang', 'BarangController@store')->name('barang.store');
Route::get('/barang/{barang}', 'BarangController@show')->name('barang.show');
Route::get('/barang/{barang}/edit', 'BarangController@edit')->name('barang.edit');
Route::put('/barang/{barang}', 'BarangController@update')->name('barang.update');
Route::delete('/barang/{barang}', 'BarangController@destroy')->name('barang.destroy');
// Route::resource('barang', 'BarangController');