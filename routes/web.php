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
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
    Route::get('/admin/kelas/verifikasi-kelas', 'AdminController@kelas')->name('admin.kelas');
    Route::get('/admin/kelas/verifikasi-peserta-kelas', 'AdminController@verifikasiPeserta')->name('admin.verifikasi.peserta');
    Route::get('/admin/kelas/verifikasi-peserta-kelas/{kelas}', 'AdminController@verifikasiPesertaDetail')->name('admin.verifikasi.peserta.detail');

    // View Kelas
    Route::get('/admin/kelas/view/{kelas}', 'AdminController@kelasView')->name('admin.kelas.view');

    Route::get('/admin/index', 'AdminController@userIndex')->name('admin.user');

    // Kategori
    Route::get('/admin/kategori/index', 'AdminController@kategoriIndex')->name('admin.kategori.index');
});

Route::get('/dashboard', 'DashboardController@index');

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'user/kelas', 'as' => 'user.kelas'], function () {
        Route::get('/index', 'UserKelasController@index')->name('');
        Route::get('/create', 'UserKelasController@create')->name('.create');
        Route::post('/store', 'UserKelasController@store')->name('.store');
        Route::get('/{kelas}/edit', 'UserKelasController@edit')->name('.edit')->middleware('kelas_edit');
        Route::post('/{kelas}/update', 'UserKelasController@update')->name('.update');

        Route::get('/{kelas:slug_kelas}/view', 'UserKelasController@view')->name('.view');

        // Publish Kelas
        Route::get('/{kelas}/materi/create-new-materi', 'UserMateriController@createMateriNew')->name('.materi.create.new')->middleware('new_materi');
        Route::post('/{kelas}/materi/store-new-materi', 'UserMateriController@storeMateriNew')->name('.materi.store.new');

        // Submit Kelas
        Route::post('/{kelas:slug_kelas}/submit', 'UserKelasController@submit')->name('.submit');
    });

    Route::group(['prefix' => 'user/history', 'as' => 'user.history'], function () {
        Route::get('/enrolled', 'UserKelasController@enrolled')->name('.enrolled');

        Route::get('/historyPengajar/{kelas}', 'UserKelasController@verifUser')->name('.historyPengajar.verifikasi');

        Route::get('/pengajar', 'PengajarController@index')->name('.pengajar');
        Route::get('/pengajar/{kelas}', 'PengajarController@kelas')->name('.pengajar.kelas');

        Route::get('/penarikan', 'PengajarController@withdraw')->name('.penarikan');
    });

    Route::group(['prefix' => 'user/kelas', 'as' => 'user.kelas.materi'], function () {
        Route::get('/{kelas}/materi', 'UserMateriController@index')->name('');
        Route::get('/{kelas}/materi/create', 'UserMateriController@create')->name('.create')->middleware('check_kelas');
        Route::post('/{kelas}/materi/store', 'UserMateriController@store')->name('.store')->middleware('check_kelas');
        Route::get('/{kelas}/materi/{materi}/edit', 'UserMateriController@edit')->name('.edit')->middleware('kelas_edit');
        Route::put('/materi/{materi}/update', 'UserMateriController@update')->name('.update')->middleware('kelas_edit');
        Route::get('/{kelas:slug_kelas}/materi/{materi:id}/show', 'UserMateriController@show')->name('.show');
        Route::post('/{kelas}/materi/order', 'UserMateriController@order')->name('.order');
    });

    Route::group(['prefix' => 'user/profile', 'as' => 'user.profile'], function () {
        Route::get('/index', 'UserProfileController@index')->name('');
        Route::get('/{user:id}/edit', 'UserProfileController@edit')->name('.edit');
        Route::post('/{user:id}/update', 'UserProfileController@update')->name('.update');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/pengaturan/index', 'UserPengaturan@index')->name('pengaturan');
    });
});
