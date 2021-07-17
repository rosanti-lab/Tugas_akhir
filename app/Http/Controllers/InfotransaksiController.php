<?php

namespace App\Http\Controllers;
use App\Models\Infotransaksi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfotransaksiController extends Controller

{
   
    public function data()
    {
        $infotransaksi = DB::table('info_transaksi')->get();

        
        return view('infotransaksi.data', ['info_transaksi' =>$infotransaksi]);
    }

    public function edit($id)
    {
        $item = Infotransaksi::where('id_info_transaksi',$id)->FirstOrFail();
        $infotransaksi = DB::table('info_transaksi')->where('id_info_transaksi',$id)->get();
        return view('infotransaksi.edit',compact('infotransaksi','item'));
    }

    public function update(Request $request, $id)
    {
        $infotransaksi=Infotransaksi::where('id_info_transaksi',$id)
            ->update([
                'judul'=>$request->judul,             //nama dari database->nama dari form input
                'konten'=>$request->konten,

            ]);
            return redirect('/infotransaksi');
    }

    public function add()
    {
        return view('infotransaksi.add');
    }

    public function addProcess(Request $request)
    {
        $infotransaksi = new Infotransaksi;
        
        
        $infotransaksi->judul = $request->judul;
        $infotransaksi->konten = $request->konten;

        $infotransaksi->save();

        return redirect('/infotransaksi');
    
    }

    public function destroy($id)
    {
        $infotransaksi = Infotransaksi::where('id_info_transaksi',$id);
        $infotransaksi->delete();
        return redirect('/infotransaksi');
    }

}