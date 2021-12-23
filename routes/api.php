<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

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
