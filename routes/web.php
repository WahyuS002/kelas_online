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

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

/*
======= MEMBELI KELAS =======
*/
Route::group(['prefix' => 'kelas', 'as' => 'user.'], function () {
    Route::get('/{kelas}/checkout', 'UserKelasController@checkout')->name('kelas.checkout');
    Route::get('/{kelas}/checkoutKelas', 'UserKelasController@checkoutKelas')->name('kelas.checkoutKelas');
    Route::post('/{kelas}/beli', 'UserKelasController@kelasBeli')->name('kelas.beli');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/kelas', 'KelasController@index')->name('kelas');
Route::get('/kelas/{kelas}/detail', 'KelasController@detail')->name('kelas.detail');
Route::get('/kelas/{slug_kelas}/{slug_materi}/', 'KelasController@show')->name('kelas.show');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminController@login')->name('admin.login.submit');
});

Route::middleware('auth:admin')->group(function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
        Route::get('/', 'AdminController@index')->name('dashboard');
        Route::get('/kelas/verifikasi-kelas', 'AdminController@kelas')->name('kelas');
        Route::get('/kelas/verifikasi-peserta-kelas', 'AdminController@verifikasiPeserta')->name('verifikasi.peserta');
        Route::get('/kelas/verifikasi-peserta-kelas/{kelas}', 'AdminController@verifikasiPesertaDetail')->name('verifikasi.peserta.detail');

        Route::get('/kelas/view/{kelas}', 'AdminController@kelasView')->name('kelas.view');
        Route::get('/users', 'AdminController@userIndex')->name('user');
        Route::get('/kategori/index', 'AdminController@kategoriIndex')->name('kategori.index');
    });
});

Route::get('/dashboard', 'DashboardController@index');

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'user/kelas', 'as' => 'user.kelas', 'namespace' => 'User'], function () {
        Route::get('/index', 'KelasController@index')->name('');
        Route::get('/create', 'KelasController@create')->name('.create');
        Route::post('/store', 'KelasController@store')->name('.store');
        Route::get('/{kelas}/edit', 'KelasController@edit')->name('.edit')->middleware('kelas_edit');
        Route::post('/{kelas}/update', 'KelasController@update')->name('.update');

        Route::get('/{kelas:slug_kelas}/view', 'KelasController@view')->name('.view');

        // Publish Kelas
        Route::get('/{kelas}/materi/create-new-materi', 'MateriController@createMateriNew')->name('.materi.create.new')->middleware('new_materi');
        Route::post('/{kelas}/materi/store-new-materi', 'MateriController@storeMateriNew')->name('.materi.store.new');

        // Submit Kelas
        Route::post('/{kelas:slug_kelas}/submit', 'KelasController@submit')->name('.submit');
    });

    Route::group(['prefix' => 'user/history', 'as' => 'user.history', 'namespace' => 'User'], function () {
        Route::get('/enrolled', 'KelasController@enrolled')->name('.enrolled');

        Route::get('/historyPengajar/{kelas}', 'KelasController@verifUser')->name('.historyPengajar.verifikasi');

        Route::get('/pengajar', 'PengajarController@index')->name('.pengajar');
        Route::get('/pengajar/{kelas}', 'PengajarController@kelas')->name('.pengajar.kelas');

        Route::get('/penarikan', 'PengajarController@withdraw')->name('.penarikan');
    });

    Route::group(['prefix' => 'user/kelas', 'as' => 'user.kelas.materi', 'namespace' => 'User'], function () {
        Route::get('/{kelas}/materi', 'MateriController@index')->name('');
        Route::get('/{kelas}/materi/create', 'MateriController@create')->name('.create')->middleware('check_kelas');
        Route::post('/{kelas}/materi/store', 'MateriController@store')->name('.store')->middleware('check_kelas');
        Route::get('/{kelas}/materi/{materi}/edit', 'MateriController@edit')->name('.edit')->middleware('kelas_edit');
        Route::put('/materi/{materi}/update', 'MateriController@update')->name('.update')->middleware('kelas_edit');
        Route::get('/{kelas:slug_kelas}/materi/{materi:id}/show', 'MateriController@show')->name('.show');
        Route::post('/{kelas}/materi/order', 'MateriController@order')->name('.order');
    });

    Route::group(['prefix' => 'user/profile', 'as' => 'user.profile', 'namespace' => 'User'], function () {
        Route::get('/index', 'ProfileController@index')->name('');
        Route::get('/{user:id}/edit', 'ProfileController@edit')->name('.edit');
        Route::post('/{user:id}/update', 'ProfileController@update')->name('.update');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User'], function () {
        Route::get('/pengaturan/index', 'PengaturanController@index')->name('pengaturan');
    });
});
