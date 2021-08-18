<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Transaksi;
use App\models\Montransaksi;
use PDF;
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

    public function edit($id)
    {
        $item = Montransaksi::where('id_monitoring',$id)->FirstOrFail();
        $mon_transaksi = DB::table('mon_transaksi')->where('id_monitoring',$id)->get();
        return view('mon_transaksi.edit',compact('mon_transaksi','item'));
    }

    public function update(Request $request, $id)
    {
        $mon_transaksi=Montransaksi::where('id_monitoring',$id)
            ->update([
                'status_monitoring'=>$request->status_monitoring,             //nama dari database->nama dari form input

            ]);
            return redirect('/mon_transaksi');
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

    public function destroy($id)
    {
        $mon_transaksi = Montransaksi::where('id_monitoring',$id);
        $mon_transaksi->delete();
        return redirect('/mon_transaksi');
    }

    public function cetak1($id)
    {
        $item =Montransaksi::findOrFail($id)->select ('*')->join('produks', 'mon_transaksi.id_produk', '=', 'produks.id_produk')->where('id_monitoring',$id)->FirstOrFail();

// dd($item);
        $customPaper = array(0,0,500.80,567.00);
        $pdf =PDF::loadView('pages.lap_keuangan',compact('item'))->setPaper($customPaper, 'potrait');;

        return $pdf->download('laporan_keunagan.pdf');
    }

    // public function print($id)
    // {
    //     $detail =Transaksi::findOrFail($id)-> join('produks', 'transaksi.id_produk', '=', 'produks.id_produk')->where('id',$id)->FirstOrFail();

    //     return view('pages.printpesanan',compact('detail'));
    // }

    // public function cetak($id)
    // {
    //     $detail =Transaksi::findOrFail($id)->select ('transaksi.*', 'produks.*', 'transaksi.created_at as create' )-> join('produks', 'transaksi.id_produk', '=', 'produks.id_produk')->where('id',$id)->FirstOrFail();

    //     $customPaper = array(0,0,500.80,567.00);
    //     $pdf =PDF::loadView('pages.printpesanan',compact('detail'))->setPaper($customPaper, 'potrait');;

    //     // dd($detail);
    //     return $pdf->download('nota_pembayaran.pdf');
    // }





}
