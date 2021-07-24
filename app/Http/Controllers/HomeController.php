<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;
use App\Courier;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

//=========================================

    public function data ()
    {
        $couriers = Courier::pluck('title', 'code');
        $provinces = Province::pluck('title', 'province_id')
        return view('welcome',compact('provinces','couriers'));
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
        ]) -> get();
    }


}