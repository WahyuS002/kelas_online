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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Admin
Route::middleware('guest')->prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminController@login')->name('admin.login.submit');
});

// Admin Dashboard
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
    Route::get('/admin/kelas/index', 'AdminController@kelas')->name('admin.kelas');

    // View Kelas
    Route::get('/admin/kelas/view/{kelas}', 'AdminController@kelasView')->name('admin.kelas.view');

    Route::get('/admin/user/index', 'AdminController@userIndex')->name('admin.user');

    // Kategori
    Route::get('/admin/kategori/index', 'AdminController@kategoriIndex')->name('admin.kategori.index');
});

Route::get('/dashboard', 'DashboardController@index');

// Route::get('/admin/kelas', 'KelasController@admin')->name('kelas.admin');
// Route::get('/admin/kelas/{kelas:id}/verifikasi', 'KelasController@verifikasi')->name('kelas.verifikasi');

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    // Kelas
    Route::get('/user/kelas/index', 'UserKelasController@index')->name('user.kelas');

    Route::get('/user/kelas/create', 'UserKelasController@create')->name('user.kelas.create');
    Route::post('/user/kelas/store', 'UserKelasController@store')->name('user.kelas.store');

    Route::get('/user/kelas/{kelas}/edit', 'UserKelasController@edit')->name('user.kelas.edit')->middleware('kelas_edit');
    Route::post('/user/kelas/{kelas}/update', 'UserKelasController@update')->name('user.kelas.update');

    Route::get('/user/kelas/{kelas:slug_kelas}/view', 'UserKelasController@view')->name('user.kelas.view');

    // Pengaturan
    Route::get('/user/pengaturan/index', 'UserPengaturan@index')->name('user.pengaturan');

    // History Kelas
    Route::get('/user/history/enrolled', 'UserKelasController@enrolled')->name('user.kelas.enrolled');

    Route::get('/user/history/historyPengajar/{kelas}', 'UserKelasController@verifUser')->name('user.kelas.historyPengajar.verifikasi');

    // Kelas Beli
    Route::get('/kelas/{kelas}/checkout', 'UserKelasController@checkout')->name('user.kelas.checkout');
    Route::get('/kelas/{kelas}/checkoutKelas', 'UserKelasController@checkoutKelas')->name('user.kelas.checkoutKelas');
    Route::post('/kelas/{kelas}/beli', 'UserKelasController@kelasBeli')->name('user.kelas.beli');

    // Submit Kelas
    Route::post('/user/kelas/{kelas:slug_kelas}/submit', 'UserKelasController@submit')->name('user.kelas.submit');

    // Materi
    Route::get('/user/kelas/{kelas}/materi', 'UserMateriController@index')->name('user.kelas.materi');
    Route::get('/user/kelas/{kelas}/materi/create', 'UserMateriController@create')->name('user.kelas.materi.create')->middleware('check_kelas');
    Route::post('/user/kelas/{kelas}/materi/store', 'UserMateriController@store')->name('user.kelas.materi.store')->middleware('check_kelas');
    Route::get('/user/kelas/{kelas}/materi/{materi}/edit', 'UserMateriController@edit')->name('user.kelas.materi.edit')->middleware('kelas_edit');
    Route::put('/user/kelas/materi/{materi}/update', 'UserMateriController@update')->name('user.kelas.materi.update')->middleware('kelas_edit');
    Route::get('/user/kelas/{kelas:slug_kelas}/materi/{materi:id}/show', 'UserMateriController@show')->name('user.kelas.materi.show');

    Route::get('/user/profile/index', 'UserProfileController@index')->name('user.profile');
    Route::get('/user/profile/{user:id}/edit', 'UserProfileController@edit')->name('user.profile.edit');
    Route::post('/user/profile/{user:id}/update', 'UserProfileController@update')->name('user.profile.update');

    // Publish Kelas
    Route::get('/user/kelas/{kelas}/materi/create-new-materi', 'UserMateriController@createMateriNew')->name('user.kelas.materi.create.new')->middleware('new_materi');

    Route::post('/user/kelas/{kelas}/materi/store-new-materi', 'UserMateriController@storeMateriNew')->name('user.kelas.materi.store.new');
});

// Frontend
Route::get('/kelas/{kelas}/detail', 'MateriController@detail')->name('materi.detail');
Route::get('/kelas/{slug_kelas}/materi/{urutan}', 'MateriController@show')->name('materi.show');
