<?php

namespace App\Http\Controllers;

use App\Models\Monsampah;
use App\Models\Sampahorganik;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
            if($request->status_penjemputan === 'selesai'){      //proses jumlah pendapatan sampah perminggu
                $total = 0;
                $now = Carbon::create(Sampahorganik::where('id',$id)->first()->tanggal);
                $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i');
                $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i');
                // dd($weekStartDate);
                $sampahs =  Sampahorganik::where('created_at', '>=', $weekStartDate)->where('created_at', '<=', $weekEndDate)->where('status_penjemputan', 'selesai')->get();
                foreach ($sampahs as $sampah) {
                    $total += $sampah->berat;
                }
                Monsampah::updateOrCreate(
                    ['tanggal' => $weekStartDate],
                    [
                        'hari' => $weekStartDate.'-'.$weekEndDate,
                        'total_sampah' => $total,
                        'note'  => '-',
                        'status_monitoring' => 'selesai'
                    ]
                );
            }

            return redirect('/sampahorganik');
    }

    public function destroy(Request $request,$id)
    {
        $sampahorganik = Sampahorganik::where('id',$id);
        $sampahorganik->delete();

        if($request->status_penjemputan === 'selesai'){      //proses jumlah pendapatan sampah perminggu
            $total = 0;
            $now = Carbon::create(Sampahorganik::where('id',$id)->first()->tanggal);
            $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i');
            $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i');
            // dd($weekStartDate);
            $sampahs =  Sampahorganik::where('created_at', '>=', $weekStartDate)->where('created_at', '<=', $weekEndDate)->where('status_penjemputan', 'selesai')->get();
            foreach ($sampahs as $sampah) {
                $total += $sampah->berat;
            }
            Monsampah::updateOrDelete(
                ['tanggal' => $weekStartDate],
                [
                    'hari' => $weekStartDate.'-'.$weekEndDate,
                    'total_sampah' => $total,
                    'note'  => '-',
                    'status_monitoring' => 'selesai'
                ]
            );
        }

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

        return redirect('/daftar-pengajuan');

    }

    public function daftarPengajuan()
    {
        $pengajuan =Sampahorganik::where('name',auth()->user()->name)->get();
        return view('pages.daftar_pengajuan',compact('pengajuan'));
        // dd($pesanan);
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
