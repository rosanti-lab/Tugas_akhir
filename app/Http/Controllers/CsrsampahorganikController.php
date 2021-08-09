<?php

namespace App\Http\Controllers;
use App\Models\Csrsampahorganik;
use App\Models\Monsampah;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CsrsampahorganikController extends Controller
{
    public function data()
    {
        $sampah = DB::table('mon_sampah')->get();

        return view('csr_sampahorganik.data', ['sampah' =>$sampah]);
    }

    public function edit($id)
    {
        $item = Csrsampahorganik::where('id',$id)->FirstOrFail();
        $sampah = DB::table('mon_sampah')->where('id',$id)->get();
        return view('csr_sampahorganik.edit',compact('sampah','item'));
    }

    public function update(Request $request, $id)
    {
        $sampah=Csrsampahorganik::where('id',$id)
            ->update([
                'note'=>$request->note,             //nama dari database->nama dari form input
                // 'status_penjemputan'=>$request->status_penjemputan,

            ]);
            return redirect('/csr_sampahorganik');
    }


}
