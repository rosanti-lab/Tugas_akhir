<?php

namespace App\Http\Controllers;

use App\Models\Infotransaksi;
use App\Models\Produk;
use App\Models\Detail_pesanan;
use App\Models\Transaksi;

use Illuminate\Http\Request;

class PembelihomeController extends Controller
{
    public function index()
    {

        $tran = Infotransaksi::all();

        // dd($items= Infosampah::all());
        return view('pages.pembelian', ['tran' =>$tran]);
    }

    public function pesan($id)
    {
        $produk = Produk::where('id_produk',$id)->FirstOrFail();        //nampilin produk sesuai id

        return view('pelanggan.pesan',compact('produk'));
    }

    public function store(Request $request)         //NAMBAH KE TABEL DETAIL PESANAN
    {


        $detail_pesanan = new Detail_pesanan;
        $detail_pesanan->nama_customer = auth()->user()->name;
    }
        // $detail_pesanan->produk = $request->produk;
        // if($request->hasfile('foto')){
        //     $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
        //     $detail_pesanan->desain=$request->file('foto')->getClientOriginalName();
        // } else {
        //     $detail_pesanan->desain = $request->desain;
        // }
        // $detail_pesanan->id_bahanukuran = $request->bahanukuran;
        // $detail_pesanan->id_ukuran = $request->ukuran;
        // $ukuran=ukuran::select('harga')->where('id_ukuran',$detail_pesanan->id_ukuran)->get();
        // $harga=hargabahan::select('harga')->where('id_bahan',$detail_pesanan->id_bahanukuran)->get();
        // foreach ($harga as $harga){
            // foreach ($produk as $produk){
            // $detail_pesanan->harga = $harga->harga+$ukuran->harga;

            // }
        // }
 }
