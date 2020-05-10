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
// Route::get('/barang', 'BarangController@index')->name('barang.index');
// Route::get('/barang/create', 'BarangController@create')->name('barang.create');
// Route::post('/barang', 'BarangController@store')->name('barang.store');
// Route::get('/barang/{barang}', 'BarangController@show')->name('barang.show');
// Route::get('/barang/{barang}/edit', 'BarangController@edit')->name('barang.edit');
// Route::put('/barang/{barang}', 'BarangController@update')->name('barangs.update');
// Route::delete('/barang/{barang}', 'BarangController@destroy')->name('barang.destroy');
Route::resource('barang', 'BarangController');

/* route toko */
// Route::get('/toko', 'TokoController@index')->name('toko.index');
// Route::get('/toko/create', 'TokoController@create')->name('toko.create');
// Route::post('/toko', 'TokoController@store')->name('toko.store');
// Route::get('/toko/{toko}', 'TokoController@show')->name('toko.show');
// Route::get('/toko/{toko}/edit', 'TokoController@edit')->name('toko.edit');
// Route::patch('/toko/{toko}', 'TokoController@update')->name('toko.update');
// Route::delete('/toko/{toko}', 'TokoController@destroy')->name('toko.destroy');
Route::resource('toko', 'TokoController');