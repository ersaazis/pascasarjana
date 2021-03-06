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

Route::get('/', 'ProfilDosen@index');
Route::get('/profil/{id}/{nama}', 'ProfilDosen@profil');
Route::get('/cari', 'ProfilDosen@cari');
Route::get('/kerjasama', 'ProfilDosen@kerjasama');
Route::get('/akreditasi', 'ProfilDosen@akreditasi');

Route::middleware(['web','\crocodicstudio\crudbooster\middlewares\CBBackend'])->prefix(config('crudbooster.ADMIN_PATH'))->group(function () {
	Route::get('/users/reset/{id}', 'AdminCmsUsersController@reset');
	Route::get('/users/dosen', 'TambahDosen@add');
	Route::get('/status', 'StatusProses@index')->name('statusproses');
	Route::get('/status/aktif', 'StatusProses@aktif');
	Route::post('/users/dosen', 'TambahDosen@save')->name('addDosen');
});