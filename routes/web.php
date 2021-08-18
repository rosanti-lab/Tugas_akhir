<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



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

//==============web=======================
Route::get('/', function () {
    $profil =  (DB::table('profil')->get()); //tambahan database
    return view('index', compact('profil'));

});

Route::get('/profil', function () {
    $profil =  (DB::table('profil')->get()); //tambahan database
    return view('profil', compact('profil'));

});
//=========================================

//=========================== Middlewere Admin =================================
Route::group(['middleware' => ['auth','CekRole:admin']], function () {
    Route::get('/home', function(){

         $coba = count(DB::table('users')->whereRole('user')->get());
         $coba1 = count(DB::table('produks')->get());


        return view('home',compact('coba', 'coba1'));
    });
});
//===============================================================================

//=========================== Middleware CSR =====================================
Route::group(['middleware' => ['auth','CekRole:csr']], function () {
    Route::get('homecsr', function(){
        $coba = count(DB::table('users')->whereRole('user')->get());
        $coba1 = count(DB::table('produks')->get());


       return view('homecsr',compact('coba', 'coba1'));
        // return view ('homecsr');
    });
});
//=================================================================================

//============================= Middleware User =====================================
Route::group(['middleware' => ['auth','CekRole:user']], function () {
    Route::post('sampahorganik', 'SampahorganikController@tambahdata');
    Route::get('/daftar-pesanan', 'TransaksiController@daftarPesanan');
    Route::get('/detail-pesanan/{id}', 'TransaksiController@detail');
    Route::get('/pembayaran/{id}', 'TransaksiController@pembayaran');
    Route::post('/pembayaran-store/{id}', 'TransaksiController@pembayaranStore');

});
Route::group(['middleware' => ['auth','CekRole:user']], function () {
    Route::get('/form_pengajuan', 'PengajuanController@form');
    //Route::get('/daftar-pengajuan', 'TransaksiController@daftarPenjemputan');
});
//===================================================================================

Route::get('/daftar-pengajuan', 'SampahorganikController@daftarPengajuan');

Route::group(['middleware' => ['auth','CekRole:user']], function () {
    Route::post('transaksi', 'TransaksiController@tambahdata');
});

Route::group(['middleware' => ['auth','CekRole:user']], function () {
    Route::get('form_transaksi/{id_produk}', 'TransaksiController@form');

});

Route::get('/app', 'HomeController@data');
Route::get('/app/province/{id}/cities', 'HomeController@getCities');
Route::post('/app/checkongkir', 'HomeController@check_ongkir');

Route::get('/form_transaksi', 'TransaksiController@data1');
Route::get('/form_transaksi/province/{id}/cities', 'TransaksiController@getCities');
Route::post('/form_transaksi/checkongkir', 'TransaksiController@check_ongkir');
Route::get('form_transaksi/{id}', 'TransaksiController@form');
Route::get('/pembelian', 'PembelihomeController@data1');
Route::get('/pembelian/province/{id}/cities', 'PembelihomeController@getCities');
Route::post('/pembelian/checkongkir', 'PembelihomeController@check_ongkir');

// Route::get('web', function(){
//     return view ('app');
// });
Route::get('profil', function(){
    return view ('data');
});
Route::get('about', function(){
    return view ('pages');
});

// Route::get('/login', function(){
//     return view ('login.login');
// });
//===============LOGIN===================================================
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name ('postlogin');
Route::get('/daftar', 'LoginController@daftar');
Route::post('/post_daftar', 'LoginController@postDaftar');
Route::get('/logout', 'LoginController@logout');
//========================================================================

//==================ROUTE USER =======================================
Route::get('/about_user', 'AboutController@index');
Route::get('/infosampah', 'InfosampahController@index');
Route::get('/pengajuan', 'PengajuanController@index');
Route::get('/transaksi_user', 'TransaksiController@index');
Route::get('/contact', 'ContactController@index');
// Route::get('/form_transaksi', 'TransaksiController@form');
Route::get('/form_pengajuan', 'PengajuanController@form');
//===================================================================

//profil//
Route::get('profil', 'ProfilController@data');
Route::get('profil/add', 'ProfilController@add');
Route::get('profil/edit/{id_profil}', 'ProfilController@edit');
Route::post('profil', 'ProfilController@addProcess');
Route::patch('/profil/update/{id}', 'ProfilController@update');
Route::get('/profil/destroy/{id_profil}', 'ProfilController@destroy');
Route::post('profil', 'ProfilController@tambahdata');


Route::get('sampahorganik', 'SampahorganikController@data');
Route::get('sampahorganik/edit/{id}', 'SampahorganikController@edit');
Route::patch('/sampahorganik/update/{id}', 'SampahorganikController@update');
Route::get('/sampahorganik/destroy/{id}', 'SampahorganikController@destroy');


Route::get('about', 'AboutController@data');
Route::get('about/add', 'AboutController@add');
Route::get('about/edit/{id}', 'AboutController@edit');
Route::post('about', 'AboutController@addProcess');
Route::patch('/about/update/{id}', 'AboutController@update');
Route::get('/about/destroy/{id}', 'AboutController@destroy');


Route::get('infosampah', 'InfosampahController@data');
Route::get('infosampah/edit/{id_info_sampah}', 'InfosampahController@edit');
Route::get('infosampah/add', 'InfosampahController@add');
Route::post('infosampah', 'InfosampahController@addProcess');
Route::patch('/infosampah/update/{id}', 'InfosampahController@update');
Route::get('/infosampah/destroy/{id_info_sampah}', 'InfosampahController@destroy');


Route::get('infotransaksi', 'InfotransaksiController@data');
Route::get('infotransaksi/add', 'InfotransaksiController@add');
Route::post('infotransaksi', 'InfotransaksiController@addProcess');
Route::patch('/infotransaksi/update/{id}', 'InfotransaksiController@update');
Route::get('infotransaksi/edit/{id_info_transaksi}', 'InfotransaksiController@edit');
Route::get('/infotransaksi/destroy/{id_info_transaksi}', 'InfotransaksiController@destroy');



// Route::post('/edulevels', 'PengajuanController@pengajuan')->middleware('auth');


Route::get('/transaksi', 'TransaksiController@data');
Route::get('/transaksi/barang_terjual/{id}', 'TransaksiController@barang_terjual');
Route::get('/transaksi/details/{id}', 'TransaksiController@details');
Route::patch('/transaksi/update2/{id}', 'TransaksiController@update2');
Route::get('transaksi/edit/{id}', 'TransaksiController@edit');
Route::get('/transaksi/destroy/{id}', 'TransaksiController@destroy');
Route::patch('/transaksi/update/{id}', 'TransaksiController@update');


Route::get('/mon_transaksi', 'MontransaksiController@data');
Route::get('/mon_transaksi/data_monitoring/{id}', 'MontransaksiController@data_monitoring');
Route::get('mon_transaksi/add', 'MontransaksiController@add');
Route::post('mon_transaksi', 'MontransaksiController@addProcess');
Route::get('/mon_transaksi/destroy/{id}', 'MontransaksiController@destroy');
Route::patch('/mon_transaksi/update/{id}', 'MontransaksiController@update');
Route::get('mon_transaksi/edit/{id_monitoring}', 'MontransaksiController@edit');



Route::get('/transaksi_userlogin', 'TransaksiController@index_userlogin');


Route::get('admin', 'AdminController@data');
Route::get('/admin/destroy/{id}', 'AdminController@destroy');
Route::get('admin/add', 'AdminController@add');
Route::post('admin', 'AdminController@addProcess');


Route::get('mon_sampah', 'MonsampahController@data');
Route::get('mon_sampah/add', 'MonsampahController@add');
Route::post('mon_sampah', 'MonsampahController@addProcess');
Route::patch('/mon_sampah/update/{id}', 'MonsampahController@update');
Route::get('mon_sampah/edit/{id}', 'MonsampahController@edit');
Route::get('/mon_sampah/destroy/{id}', 'MonsampahController@destroy');
Route::get('/cetak1/{id}', 'MontransaksiController@cetak1');


Route::get('csr_sampahorganik', 'CsrsampahorganikController@data');
Route::patch('/csr_sampahorganik/update/{id}', 'CsrsampahorganikController@update');
Route::get('csr_sampahorganik/edit/{id}', 'CsrsampahorganikController@edit');


Route::get('csr_transaksi', 'CsrtransaksiController@data');
Route::get('/csr_transaksi/data_monitoring/{id}', 'CsrtransaksiController@data_monitoring');
Route::patch('/csr_transaksi/update/{id}', 'CsrtransaksiController@update');
Route::get('csr_transaksi/edit/{id_monitoring}', 'CsrtransaksiController@edit');
// Route::get('/print/{id}', 'MontransaksiController@print');
// Route::get('/print/{id}/cetak', 'MontransaksiController@cetak');


Route::get('/pembelian', 'PembelihomeController@index');
Route::get('/pembelian', 'PembelihomeController@pesan');


Route::get('produk', 'ProdukController@data');
Route::get('produk/add', 'ProdukController@add');
Route::post('produk', 'ProdukController@addProcess');
Route::patch('/produk/update/{id}', 'ProdukController@update');
Route::get('produk/edit/{id_produk}', 'ProdukController@edit');
Route::get('/produk/destroy/{id_produk}', 'ProdukController@destroy');


Route::get('/detailpesanan/edit/{id}', 'TransaksiController@detail');

Route::get('/print/{id}', 'TransaksiController@print');
Route::get('/print/{id}/cetak', 'TransaksiController@cetak');
// Route::get('/print1/{id}', 'TransaksiController@print1');
// Route::get('/cetak1/{id}', 'TransaksiController@cetak1');
