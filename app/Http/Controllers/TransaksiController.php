<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        $items = Transaksi::all();

        return view('pages.transaksi_user')->with([
            'items' => $items
        ]);
    }


    public function data()
    {
        $transaksi = DB::table('transaksi')->get();

        // return $edulevels;
        return view('transaksi.data', ['transaksi' =>$transaksi]);
    }

    public function tambahdata(Request $request)
    {
        DB::table('transaksi') -> insert([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telephon' => $request->telephon,
            'jenis_maggot' => $request->jenis_maggot,
            'berat' => $request->berat,
            'bukti_tf' => $request->bukti_tf,
            'jasa_pengiriman' => $request->jasa_pengiriman,
        ]);
        return redirect('/transaksi_user');
    }



}