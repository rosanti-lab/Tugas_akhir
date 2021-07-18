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
    return view('index');
});
Route::get('home', function(){
    return view ('home');
});
Route::get('homecsr', function(){
    return view ('homecsr');
});
Route::get('web', function(){
    return view ('app');
});
Route::get('profil', function(){
    return view ('data');
});
Route::get('about', function(){
    return view ('pages');
});

// Route::get('/login', function(){
//     return view ('login.login');
// });
Route::get('/login', 'LoginController@login');
Route::post('/postlogin', 'LoginController@postlogin')->name ('postlogin');
Route::get('/daftar', 'LoginController@daftar');



Route::get('sampahorganik', 'SampahorganikController@data');
Route::post('sampahorganik', 'SampahorganikController@tambahdata');
Route::get('sampahorganik/edit/{id}', 'SampahorganikController@edit');
Route::get('/sampahorganik/destroy/{id}', 'SampahorganikController@destroy');

//user
Route::get('/about_user', 'AboutController@index');
Route::get('/infosampah', 'InfosampahController@index');
Route::get('/pengajuan', 'PengajuanController@index');
Route::get('/transaksi_user', 'TransaksiController@index');
//profil//
Route::get('profil', 'ProfilController@data');
Route::get('profil/add', 'ProfilController@add');
Route::get('profil/edit/{id_profil}', 'ProfilController@edit');
Route::post('profil', 'ProfilController@addProcess');
Route::get('/profil/destroy/{id_profil}', 'ProfilController@destroy');


Route::get('about', 'AboutController@data');
Route::get('about/add', 'AboutController@add');
Route::get('about/edit/{id}', 'AboutController@edit');
Route::post('about', 'AboutController@addProcess');
Route::get('/about/destroy/{id}', 'AboutController@destroy');


Route::get('infosampah', 'InfosampahController@data');
Route::get('infosampah/edit/{id_info_sampah}', 'InfosampahController@edit');
Route::get('infosampah/add', 'InfosampahController@add');
Route::post('infosampah', 'InfosampahController@addProcess');
Route::get('/infosampah/destroy/{id_info_sampah}', 'InfosampahController@destroy');

Route::get('infotransaksi', 'InfotransaksiController@data');
Route::get('infotransaksi/add', 'InfotransaksiController@add');
Route::post('infotransaksi', 'InfotransaksiController@addProcess');
Route::get('infotransaksi/edit/{id_info_transaksi}', 'InfotransaksiController@edit');
Route::get('/infotransaksi/destroy/{id_info_transaksi}', 'InfotransaksiController@destroy');



Route::post('/edulevels', 'PengajuanController@pengajuan')->middleware('auth');

Route::post('transaksi', 'TransaksiController@tambahdata');
Route::get('/transaksi', 'TransaksiController@data');

Route::patch('/infosampah/update/{id}', 'InfosampahController@update');
Route::patch('/profil/update/{id}', 'ProfilController@update');
Route::patch('/about/update/{id}', 'AboutController@update');
Route::patch('/sampahorganik/update/{id}', 'SampahorganikController@update');