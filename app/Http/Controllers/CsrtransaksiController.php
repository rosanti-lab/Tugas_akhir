<?php

namespace App\Http\Controllers;

use App\models\Montransaksi;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CsrtransaksiController extends Controller
{
    public function data()
    {
        $produk1 = DB::table('produks')->get();

        $mon_transaksi = Montransaksi::join('produks', 'mon_transaksi.id_produk', '=', 'produks.id_produk')->get();

        // return $edulevels;
        return view('csr_transaksi.data', compact('produk1','mon_transaksi'));
    }
    public function data_monitoring($id)
    {
        //$transaksi = DB::table('transaksi')->get();
        $data_monitoring =Montransaksi::join('produks', 'mon_transaksi.id_produk', '=', 'produks.id_produk')->where('produks.id_produk',$id)->get();
        // dd($data_monitoring);
//
        // return $edulevels;
        return view('csr_transaksi.data_monitoring', ['data_monitoring' =>$data_monitoring]);
    }
}
