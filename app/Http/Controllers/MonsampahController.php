<?php

namespace App\Http\Controllers;
use App\Models\Monsampah;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonsampahController extends Controller

{

    public function data()
    {
        $mon_sampah = DB::table('mon_sampah')->get();

        
        return view('mon_sampah.data', ['mon_sampah' =>$mon_sampah]);
    }

    public function edit($id)
    {
        $item = Monsampah::where('id',$id)->FirstOrFail();
        $mon_sampah = DB::table('mon_sampah')->where('id',$id)->get();
        return view('mon_sampah.edit',compact('mon_sampah','item'));
    }

    public function update(Request $request, $id)
    {
        $mon_sampah=Monsampah::where('id',$id)
            ->update([
                'total_sampah'=>$request->total_sampah,
                'status_monitoring'=>$request->status_monitoring,             //nama dari database->nama dari form input

            ]);
            return redirect('/mon_sampah');
    }

    public function add()
    {
        return view('mon_sampah.add');
    }

    public function addProcess(Request $request)
    {

        $mon_sampah = new Monsampah;
        
        $mon_sampah->hari = $request->hari;
        $mon_sampah->tanggal = $request->tanggal;
        $mon_sampah->total_sampah = $request->total_sampah;
        $mon_sampah->status_monitoring = $request->status_monitoring;

        $mon_sampah->save();

        return redirect('/mon_sampah');
    
    }

    public function destroy($id)
    {
        $mon_sampah = Monsampah::where('id',$id);
        $mon_sampah->delete();
        return redirect('/mon_sampah');
    }

}