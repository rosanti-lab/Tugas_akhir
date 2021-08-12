<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Transaksi;
use App\models\Montransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MontransaksiController extends Controller
{
    public function data()
    {
        //$transaksi = DB::table('transaksi')->get();
        // $transaksi =Transaksi::join('produks', 'transaksi.id_produk', '=', 'produks.id_produk')->get();
        $produk1 = DB::table('produks')->get();
        // $monitoring = DB::table('mon_transaksi')->get();
        $mon_transaksi = Montransaksi::join('transaksi', 'mon_transaksi.id_produk', '=', 'transaksi.id_produk')->get();

        // return $edulevels;
        return view('mon_transaksi.data', compact('produk1','mon_transaksi'));
    }

    public function data_monitoring($id)
    {
        //$transaksi = DB::table('transaksi')->get();
        $data_monitoring =Montransaksi::join('produks', 'mon_transaksi.id_produk', '=', 'produks.id_produk')->where('produks.id_produk',$id)->get();
        // dd($data_monitoring);
//
        // return $edulevels;
        return view('mon_transaksi.data_monitoring', ['data_monitoring' =>$data_monitoring]);
    }

    public function add()
    {
        return view('mon_transaksi.add');
    }

    public function addProcess(Request $request)
    {

        $mon_transaksi = new Montransaksi();

        $mon_transaksi->hari = $request->hari;
        $mon_transaksi->id_transaksi = $request->id_transaksi;
        $mon_transaksi->tgl = $request->tgl;
        $mon_transaksi->total_terjual = $request->total_terjual;
        $mon_transaksi->status_monitoring = $request->status_monitoring;

        $mon_transaksi->save();

        return redirect('/mon_transaksi');

    }
}
