<?php

namespace App\Http\Controllers;
use App\Models\Infosampah;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfosampahController extends Controller

{
    public function data()
    {
        $infosampah = DB::table('info_sampah')->get();

        // return $edulevels;
        return view('infosampah.data', ['info_sampah' =>$infosampah]);
    }

    public function edit($id)
    {
        $item = Infosampah::where('id_info_sampah',$id)->FirstOrFail();
        $infosampah = DB::table('info_sampah')->where('id_info_sampah',$id)->get();
        return view('infosampah.edit',compact('infosampah','item'));
    }

    public function update(Request $request, $id)
    {
        $infosampah=Infosampah::where('id_info_sampah',$id)
            ->update([
                'image'=>$request->image,
                'judul'=>$request->judul,             //nama dari database->nama dari form input
                'konten'=>$request->konten,

            ]);
            return redirect('/infosampah');
    }

    public function add()
    {
        return view('infosampah.add');
    }

    public function addProcess(Request $request)
    {

        $infosampah = new Infosampah;
        
        $infosampah->image = $request->image;
        $infosampah->judul = $request->judul;
        $infosampah->konten = $request->konten;

        $infosampah->save();

        return redirect('/infosampah');
    
    }

    public function destroy($id)
    {
        $infosampah = Infosampah::where('id_info_sampah',$id);
        $infosampah->delete();
        return redirect('/infosampah');
    }

}