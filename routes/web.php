<?php

use Illuminate\Support\Facades\Route;


use App\Kelas;
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

// Kelas
Route::get('/kelas/index', 'KelasController@index')->name('kelas');
Route::get('/kelas/create', 'KelasController@create')->name('kelas.create');
Route::post('/kelas/store', 'KelasController@store')->name('kelas.store');
Route::get('/kelas/{kelas:id}/materi', 'MateriController@index')->name('kelas.materi');
Route::get('/kelas/{kelas:id}/materi/create', 'MateriController@create')->name('kelas.materi.create');


Route::get('/profile/index', 'ProfileController@index')->name('profile');
Route::get('/profile/{user:id}/edit', 'ProfileController@edit')->name('profile.edit');
Route::post('/profile/{user:id}/update', 'ProfileController@update')->name('profile.update');
