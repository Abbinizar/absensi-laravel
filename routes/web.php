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

Auth::routes([
	'register' => false,
]);

Route::get('/', function () {
    return redirect('login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/tambahUser', 'UserController@create');
Route::post('/editUser', 'UserController@edit');
Route::get('/hapusUser/{id}', 'UserController@destroy');

Route::get('/data-akun', 'UserController@index');

Route::get('/daftar-akun', function () {
    return view('daftar_akun');
});

Route::get('/jurnal', function () {
    return view('jurnal');
});
Route::get('/kegiatan', function () {
    return view('kegiatan');
});
Route::get('/pemberitahuan', function () {
    return view('pemberitahuan');
});

Route::get('/berita', ['as' => 'berita', 'uses' => 'BeritaController@index']);
Route::get('/data-berita', ['as' => 'data_berita', 'uses' => 'BeritaController@show']);
Route::get('/data-kegiatan', ['as' => 'data_kegiatan', 'uses' => 'KegiatanController@index']);
Route::get('/data-jurnal', ['as' => 'data_jurnal', 'uses' => 'JurnalController@index']);

Route::post('/tambahjurnal', ['as'=>'data_jurnal', 'uses' => 'JurnalController@create']);
Route::post('/ubahJurnal', 'JurnalController@edit');
Route::get('/hapusJurnal/{id}', 'JurnalController@destroy');

Route::post('/tambahkegiatan', ['as'=>'data_jurnal', 'uses' => 'KegiatanController@create']);
Route::post('/ubahKegiatan', 'KegiatanController@edit');
Route::get('/hapusKegiatan/{id}', 'KegiatanController@destroy');

Route::post('/tambahberita', ['as'=>'berita', 'uses' => 'BeritaController@create']);
Route::get('/publishBerita/{id}', 'BeritaController@publish');
Route::post('/ubahBerita', 'BeritaController@edit');
Route::get('/hapusBerita/{id}', 'BeritaController@destroy');

Route::post('/exportDataJurnal', 'JurnalController@exportJurnal');
Route::post('/exportDataKegiatan', 'JurnalController@exportKegiatan');

Route::get('/jurnalexportview', 'JurnalController@exportview');