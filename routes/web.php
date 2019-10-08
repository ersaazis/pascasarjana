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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['web','\crocodicstudio\crudbooster\middlewares\CBBackend'])->prefix(config('crudbooster.ADMIN_PATH'))->group(function () {
	Route::get('/users/dosen', 'TambahDosen@add');
	Route::post('/users/dosen', 'TambahDosen@save')->name('addDosen');
});