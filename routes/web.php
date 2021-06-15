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
    return redirect()->intended('/login');
});
/**
 * Authentication Route
 */

// hanya untuk tamu yg belum login
Route::get('/login', 'Auth\AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'Auth\AuthController@postLogin');
// Register
Route::get('/register', 'Auth\AuthController@getRegister')->middleware('guest')->name('register');
Route::post('/register', 'Auth\AuthController@postRegister');
// Logout
Route::get('/logout', 'Auth\AuthController@logout')->name('logout');

/**
 *
 */

// Route Mahasiswa GET
Route::get('/mahasiswa', 'Mahasiswa\MahasiswaController@index')->middleware('auth:mahasiswa');
Route::get('/mahasiswa/dashboard', 'Mahasiswa\MahasiswaController@index')->middleware('auth:mahasiswa');
Route::get('/mahasiswa/laporan', 'Mahasiswa\LaporanController@index')->middleware('auth:mahasiswa')->name('laporan');
Route::get('/mahasiswa/profile', 'Mahasiswa\MahasiswaController@profile')->middleware('auth:mahasiswa')->name('mahasiswa-profile');
Route::get('/mahasiswa/tutorial', 'Mahasiswa\TutorialController@index')->middleware('auth:mahasiswa')->name('tutorial');
Route::get('/mahasiswa/riwayat', 'Mahasiswa\RiwayatController@index')->middleware('auth:mahasiswa')->name('riwayat');


// Route Mahasiswa POST
Route::post('/mahasiswa/laporan', 'Mahasiswa\LaporanController@postLaporan')->middleware('auth:mahasiswa');

// Route Admin GET
Route::get('/admin', 'Admin\AdminController@index')->middleware('auth:admin');
Route::get('/admin/dashboard', 'Admin\AdminController@index')->middleware('auth:admin')->name('admin');
Route::get('/admin/profile', 'Admin\AdminController@profile')->middleware('auth:admin')->name('admin-profile');
Route::get('/admin/manage/laporan', 'Admin\manage\LaporanController@index')->middleware('auth:admin')->name('admin-laporan');
Route::get('/admin/laporan/table/{cat}', 'Admin\manage\LaporanController@json')->middleware('auth:admin');
Route::get('/admin/laporan/view/{id}', 'Admin\manage\LaporanController@onView')->middleware('auth:admin');
// Route Admin POST
Route::post('/admin/laporan/approved', 'Admin\manage\LaporanController@onApproved')->middleware('auth:admin');
Route::post('/admin/laporan/declined', 'Admin\manage\LaporanController@onDeclined')->middleware('auth:admin');

