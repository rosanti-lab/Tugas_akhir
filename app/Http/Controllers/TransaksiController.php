<?php

namespace App\Http\Controllers;
// use App\Models\About;
use App\Models\Infotransaksi;
use App\Models\Transaksi;
use App\Courier;
use App\Province;
use App\City;
use Kavist\RajaOngkir\Facades\RajaOngkir;
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

    public function form()
    {

        $form_transaksi = Infotransaksi::all();

        // dd($items= Infosampah::all());
        return view('pages.form_transaksi', ['form_transaksi' =>$form_transaksi]);
    }

    public function data1()
    {
        $couriers = Courier::pluck('title', 'code');
        $provinces = Province::pluck('title', 'province_id');
        // dd($provinces);
        return view('pages.form_transaksi',compact('provinces','couriers'));
    }

    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('title', 'city_id');
        return json_encode($city);
    }

    public function submit(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request -> city_origin,     // ID kota/kabupaten asal
            'destination'   => $request -> city_destination,// ID kota/kabupaten tujuan
            'weight'        => $request -> weight,          // berat barang dalam gram
            'courier'       => $request ->  courier,      // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();

        dd($cost[0]['costs'][2]);
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
        // dd($cek);
        return redirect('/transaksi_user');

    }



}
