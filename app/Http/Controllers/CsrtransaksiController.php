<?php

namespace App\Http\Controllers;

use App\models\Montransaksi;
use App\models\Csrtransaksi;
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

    public function edit($id)
    {
        $item = Csrtransaksi::where('id_monitoring',$id)->FirstOrFail();
        $transaksi = DB::table('mon_transaksi')->where('id_monitoring',$id)->get();
        return view('csr_transaksi.edit',compact('transaksi','item'));
    }

    public function update(Request $request, $id)
    {
        $sampah=Csrtransaksi::where('id_monitoring',$id)
            ->update([
                'note'=>$request->note,             //nama dari database->nama dari form input
                // 'status_penjemputan'=>$request->status_penjemputan,

            ]);
            return redirect('/csr_transaksi');
    }
}
