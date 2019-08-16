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

Route::get('/', function () {
    return view('login');
});
// Route::resource('kegiatan','KegiatanController');
Route::get('/daftar-akun', function () {
    return view('daftar_akun');
});

Route::get('/jurnal', function () {
    return view('jurnal');
});
Route::get('/kegiatan', function () {
    return view('kegiatan');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/data-akun', function () {
    return view('data_akun');
});

// Route::get('/data-akun', ['as' => 'data_akun', 'uses' => 'UserController@index']);
Route::get('/berita', ['as' => 'berita', 'uses' => 'BeritaController@index']);
Route::get('/data-berita', ['as' => 'data_berita', 'uses' => 'BeritaController@show']);
Route::get('/data-kegiatan', ['as' => 'data_kegiatan', 'uses' => 'KegiatanController@index']);
Route::get('/data-jurnal', ['as' => 'data_jurnal', 'uses' => 'JurnalController@index']);
Route::post('/tambahjurnal', ['as'=>'data_jurnal', 'uses' => 'JurnalController@create']);
Route::post('/tambahkegiatan', ['as'=>'data_jurnal', 'uses' => 'KegiatanController@create']);
Route::post('/tambahberita', ['as'=>'berita', 'uses' => 'BeritaController@create']);
Route::post('/hapusberita/{id}', ['as'=>'berita', 'uses' => 'BeritaController@destroy']);
Route::get('/jurnalexport', 'JurnalController@export')->name('jurnal.export');
Route::get('/jurnalexportview', 'JurnalController@exportview')->name('jurnal.exportview');
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/beranda', function () {
//     return view('beranda');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
