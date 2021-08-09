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
    return view('home.index');
});

//Auth Peserta
Route::get('peserta/login', 'Auth\PesertaController@LoginPage')->name('peserta.login');
Route::post('peserta/login', 'Auth\PesertaController@Login');
Route::get('peserta/register', 'Auth\PesertaController@RegisterPage')->name('peserta.register');
Route::post('peserta/register', 'Auth\PesertaController@Register');

//Auth Penyelenggara
Route::get('penyelenggara/login', 'Auth\PenyelenggaraController@LoginPage')->name('penyelenggara.login');
Route::post('penyelenggara/login', 'Auth\PenyelenggaraController@Login');
Route::get('penyelenggara/register', 'Auth\PenyelenggaraController@RegisterPage')->name('penyelenggara.register');
Route::post('penyelenggara/register', 'Auth\PenyelenggaraController@Register');


//Auth Admin
Route::get('admin/p', 'Auth\AdminController@LoginPage')->name('admin.login');


//Penyelenggara
Route::group(['middleware' => 'CekPenyelenggaraMiddleware'], function () {
    Route::get('penyelenggara/logout', 'Auth\PenyelenggaraController@Logout')->name('penyelenggara.logout');
    Route::get('penyelenggara/dashboard', 'Penyelenggara\DashboardController@DashboardPage')->name('penyelenggara.dashboard');
    Route::post('penyelenggara/buatkompetisi', 'Penyelenggara\BuatKompetisiController@BuatKompetisi')->name('penyelenggara.buatkompetisi');
    Route::get('penyelenggara/buatkompetisi', 'Penyelenggara\BuatKompetisiController@BuatKompetisiPage')->name('penyelenggara.buatkompetisi');
    Route::get('penyelenggara/aturkompetisi', 'Penyelenggara\AturKompetisiController@AturKompetisiPage')->name('penyelenggara.aturkompetisi');
    Route::get('penyelenggara/pengumuman', 'Penyelenggara\PengumumanController@PengumumanPage')->name('penyelenggara.pengumuman');
    Route::get('penyelenggara/bantuan', 'Penyelenggara\BantuanController@BantuanPage')->name('penyelenggara.bantuan');
    Route::get('penyelenggara/pengaturan', 'Penyelenggara\PengaturanController@PengaturanPage')->name('penyelenggara.pengaturan');
    Route::get('penyelenggara/daftar/karya/per_kompetisi/{id}', 'Penyelenggara\ListKaryaController@show')->name('list_karya.show');
    Route::get('penyelenggara/daftar/karya/per_kompetisi', 'Penyelenggara\ListKaryaController@dataDT')->name('list_karya.dataDT');
    Route::get('read_all/notif/penyelenggara', 'Peserta\CariKompetisiController@read_all_penyelenggara')->name('read_notif.penyelenggara');
    Route::post('penyelenggara/set_juara', 'Penyelenggara\ListKaryaController@set_juara')->name('set_juara');
    Route::get('penyelenggara/daftar/karya/per_kompetisi/download/gambar_karya/{file}', 'Penyelenggara\AturKompetisiController@download_gambar');
    Route::get('penyelenggara/daftar/karya/per_kompetisi/download/berkas_daftar/{file}', 'Penyelenggara\AturKompetisiController@download_berkas_daftar');
});

Route::get('/download_poster/{file}', 'Penyelenggara\AturKompetisiController@download_poster');
Route::get('/download_surat_pernyataan/{file}', 'Penyelenggara\AturKompetisiController@download_surat_pernyataan');
Route::get('/download_panduan/{file}', 'Penyelenggara\AturKompetisiController@download_panduan');
//Peserta
Route::group(['middleware' => 'CekPesertaMiddleware'], function () {
Route::get('peserta/logout', 'Auth\PesertaController@Logout')->name('peserta.logout');
Route::get('peserta/dashboard', 'Peserta\DashboardController@DashboardPage')->name('peserta.dashboard');
Route::get('peserta/cari-kompetisi', 'Peserta\CariKompetisiController@CariKompetisiPage')->name('peserta.carikompetisi');
Route::get('peserta/detail-cari-kompetisi/{kompetisi}', 'Peserta\CariKompetisiController@DetailCariKompetisiPage')->name('peserta.detailcarikompetisi');
Route::post('peserta/kirim-karya', 'Peserta\CariKompetisiController@KirimKarya')->name('peserta.kirimkarya');
Route::get('peserta/kompetisi-saya', 'Peserta\KompetisiSayaController@KompetisiSayaPage')->name('peserta.kompetisisaya');
Route::get('peserta/pengumuman', 'Peserta\PengumumanController@PengumumanPage')->name('peserta.pengumuman');
Route::get('peserta/bantuan', 'Peserta\BantuanController@BantuanPage')->name('peserta.bantuan');
Route::get('peserta/pengaturan', 'Peserta\PengaturanController@PengaturanPage')->name('peserta.pengaturan');
Route::get('read_all/notif', 'Peserta\CariKompetisiController@read_all')->name('read_notif');
Route::get('peserta/aturkompetisi', 'Peserta\CariKompetisiController@CariKompetisiPage')->name('peserta.aturkompetisi');
Route::get('peserta/detail/karya/{id}', 'Peserta\CariKompetisiController@detail_karya')->name('peserta.detail.karya');
Route::get('peserta/pemenang/kompetisi/{id}', 'Peserta\CariKompetisiController@pemenang_kompetisi')->name('peserta.pemanangkompetisi');

});

//Home
Route::get('home/pilih-daftar', function () {return view('home.pilih-daftar');})->name('home.pilih-daftar');
Route::get('home/pameran', 'PameranController@index')->name('home.pameran');
Route::get('home/kompetisi', 'KompetisiController@index')->name('home.kompetisi');
Route::get('home/tentang-kami', 'HomeController@index')->name('home.tentangkami');

