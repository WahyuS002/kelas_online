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
Route::get('/user/kelas/index', 'UserKelasController@index')->name('kelas');
Route::get('/user/kelas/create', 'UserKelasController@create')->name('kelas.create');
Route::post('/user/kelas/store', 'UserKelasController@store')->name('kelas.store');
Route::get('/user/kelas/{kelas:id}/materi', 'UserMateriController@index')->name('kelas.materi');
Route::get('/user/kelas/{kelas:id}/materi/create', 'UserMateriController@create')->name('kelas.materi.create');


Route::get('/user/profile/index', 'UserProfileController@index')->name('profile');
Route::get('/user/profile/{user:id}/edit', 'UserProfileController@edit')->name('profile.edit');
Route::post('/user/profile/{user:id}/update', 'UserProfileController@update')->name('profile.update');

// Frontend
Route::get('/kelas', 'KelasController@index');
