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
Route::get('/data-kegiatan', ['as' => 'data_kegiatan', 'uses' => 'KegiatanController@index']);
Route::get('/data-jurnal', ['as' => 'data_jurnal', 'uses' => 'JurnalController@index']);
Route::post('/tambahjurnal', ['as'=>'data_jurnal', 'uses' => 'JurnalController@create']);
Route::post('/tambahkegiatan', ['as'=>'data_jurnal', 'uses' => 'KegiatanController@create']);
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/beranda', function () {
    return view('beranda');
});