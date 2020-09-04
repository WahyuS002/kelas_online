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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Admin
Route::get('/dashboard', 'DashboardController@index');

Route::get('/admin/kelas', 'KelasController@admin')->name('kelas.admin');
Route::get('/admin/kelas/{kelas:id}/verifikasi', 'KelasController@verifikasi')->name('kelas.verifikasi');

// Kelas
Route::get('/user/kelas/index', 'UserKelasController@index')->name('kelas');
Route::get('/user/kelas/create', 'UserKelasController@create')->name('kelas.create');
Route::post('/user/kelas/store', 'UserKelasController@store')->name('kelas.store');

// Materi
Route::get('/user/kelas/{kelas:id}/materi', 'UserMateriController@index')->name('kelas.materi');
Route::get('/user/kelas/{kelas:id}/materi/create', 'UserMateriController@create')->name('kelas.materi.create');
Route::post('/user/kelas/{kelas:id}/materi/store', 'UserMateriController@store')->name('kelas.materi.store');
Route::get('/user/kelas/{kelas:id}/materi/{materi:id}/edit', 'UserMateriController@edit')->name('kelas.materi.edit');
Route::put('/user/kelas/materi/{materi:id}/update', 'UserMateriController@update')->name('kelas.materi.update');

Route::get('/user/profile/index', 'UserProfileController@index')->name('profile');
Route::get('/user/profile/{user:id}/edit', 'UserProfileController@edit')->name('profile.edit');
Route::post('/user/profile/{user:id}/update', 'UserProfileController@update')->name('profile.update');

// Frontend
Route::get('/kelas/{kelas:slug_kelas}/detail', 'MateriController@detail')->name('materi.detail');
Route::get('/kelas/{slug_kelas}/materi/{materi_id}', 'MateriController@show')->name('materi.show');
