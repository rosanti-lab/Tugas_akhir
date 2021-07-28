<?php

namespace App\Http\Controllers;

use App\Models\Sampahorganik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SampahorganikController extends Controller
{
    public function data()
    {
        $sampahorganik = DB::table('sampahorganik')->get();

        // return $edulevels;
        return view('sampahorganik.data', ['sampahorganik' =>$sampahorganik]);
    }

    public function edit($id)
    {
        $item = Sampahorganik::where('id',$id)->FirstOrFail();
        $sampahorganik = DB::table('sampahorganik')->where('id',$id)->get();
        return view('sampahorganik.edit',compact('sampahorganik','item'));
    }

    public function update(Request $request, $id)
    {
        $sampahorganik=Sampahorganik::where('id',$id)
            ->update([
                'berat'=>$request->berat,             //nama dari database->nama dari form input
                'status_penjemputan'=>$request->status_penjemputan,

            ]);
            return redirect('/sampahorganik');
    }

    public function destroy($id)
    {
        $sampahorganik = Sampahorganik::where('id',$id);
        $sampahorganik->delete();
        return redirect('/sampahorganik');
    }

    public function tambahdata(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'telephon' => 'required',
            'tanggal' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'public/assets/pengajuan/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);
        // dd($image);

            $input['image'] = "$profileImage";
        // dd($input);

        }
        Sampahorganik::create($input);

        return redirect('/pengajuan');

    }


    // public function tambahdata(Request $request)
    // {
    //     DB::table('sampahorganik') -> insert([
    //         'name' => $request->name,
    //         'alamat' => $request->alamat,
    //         'telephon' => $request->telephon,
    //         'tanggal' => $request->tanggal,
    //         'image' => $request->image
    //     ]);
    //     return redirect('/pengajuan');
    // }

}
