<?php

namespace App\Http\Controllers;
// use App\Models\About;
use App\Models\Infotransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {

        $transaksi = Infotransaksi::all();
        
        // dd($items= Infosampah::all());
        return view('pages.transaksi_user', ['transaksi' =>$transaksi]);
    }

    // public function index()
    // {
    //     $items = Transaksi::all();

    //     return view('pages.transaksi_user')->with([
    //         'items' => $items
    //     ]);
    // }


    public function data()
    {
        $transaksi = DB::table('transaksi')->get();

        // return $edulevels;
        return view('transaksi.data', ['transaksi' =>$transaksi]);
    }

    public function edit($id)
    {
        $item = Transaksi::where('id',$id)->FirstOrFail();
        $transaksi = DB::table('transaksi')->where('id',$id)->get();
        return view('transaksi.edit',compact('transaksi','item'));
    }

    public function update(Request $request, $id)
    {
        $transaksi=Transaksi::where('id',$id)
            ->update([
                'status_pengiriman'=>$request->status_pengiriman,             //nama dari database->nama dari form input
                'status_transaksi'=>$request->status_transaksi,

            ]);
            return redirect('/transaksi');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::where('id',$id);
        $transaksi->delete();
        return redirect('/transaksi');
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