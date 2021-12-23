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
    return view('home');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/formpeminjamanalat', 'FormpeminjamanalatController@index');
Route::post('/formpeminjamanalat/create', 'FormpeminjamanalatController@create');
Route::get('/formpeminjamanruang', 'FormpeminjamanruangController@index');
Route::post('/formpeminjamanruang/create', 'FormpeminjamanruangController@create');
Route::get('/datapeminjamanalat', 'DatapeminjamanController@datapeminjamanalat');
Route::get('/datapeminjamanruang', 'DatapeminjamanController@datapeminjamanruang');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/peminjamanalat', 'PeminjamanalatController@index');
    Route::post('/peminjamanalat/create', 'PeminjamanalatController@create');
    Route::get('/peminjamanalat/{id}/detail', 'PeminjamanalatController@detail');
    Route::get('/peminjamanalat/{id}/edit', 'PeminjamanalatController@edit');
    Route::post('/peminjamanalat/{id}/update', 'PeminjamanalatController@update');
    Route::get('/peminjamanalat/{id}/delete', 'PeminjamanalatController@delete');

    Route::get('/peminjamanruang', 'PeminjamanruangController@index');
    Route::post('/peminjamanruang/create', 'PeminjamanruangController@create');
    Route::get('/peminjamanruang/{id}/detail', 'PeminjamanruangController@detail');
    Route::get('/peminjamanruang/{id}/edit', 'PeminjamanruangController@edit');
    Route::post('/peminjamanruang/{id}/update', 'PeminjamanruangController@update');
    Route::get('/peminjamanruang/{id}/delete', 'PeminjamanruangController@delete');
});
