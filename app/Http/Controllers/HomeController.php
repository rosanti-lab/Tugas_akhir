<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;
use App\Courier;
use App\User;
use Illuminate\Support\Facades\DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class HomeController extends Controller
{
    public function index()
    {
        // $count = User::count();
        // return view::make('users')->with('count', $count);
        $coba['users'] = count(DB::table('users')->whereRole('user')->get());
        // $hitung_user = count($coba)['users'];
        var_dump($coba); die;

        return view('home',compact('hitung_user','coba'));
    }

//=========================================

    public function form_rajaongkir()
    {
        return view('app');
    }

    public function data()
    {
        $couriers = Courier::pluck('title', 'code');
        $provinces = Province::pluck('title', 'province_id');
        // dd($provinces);
        return view('app',compact('provinces','couriers'));
    }

    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('title', 'city_id');
        return json_encode($city);
    }

    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request -> city_origin,     // ID kota/kabupaten asal
            'destination'   => $request -> city_destination,// ID kota/kabupaten tujuan
            'weight'        => $request -> weight,          // berat barang dalam gram
            'courier'       => $request ->  courier,      // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();
        //  dd($cost[0]['costs'][2]['cost']['value']);
        return response()->json($cost);
    }


}
