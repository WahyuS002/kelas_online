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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin
Route::get('/dashboard', 'DashboardController@index');

Route::get('/admin/kelas', 'KelasController@admin')->name('kelas.admin');
Route::get('/admin/kelas/{kelas:id}/verifikasi', 'KelasController@verifikasi')->name('kelas.verifikasi');

// Guru
Route::get('/guru/kelas', 'KelasController@index')->name('kelas');
Route::get('/guru/kelas/create', 'KelasController@create')->name('kelas.create');
Route::post('/guru/kelas/store', 'KelasController@store')->name('kelas.store');
