<?php

namespace App\Http\Controllers;
// use App\Models\About;
use App\Models\Infotransaksi;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Courier;
use App\Province;
use App\City;
use App\User;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {

        $transaksi = Produk::all();

        // dd($items= Infosampah::all());
        return view('pages.transaksi_user', ['transaksi' =>$transaksi]);
    }

    public function form($id)
    {

        $form_transaksi = Infotransaksi::all();
        //$form_transaksi =Transaksi::join('produks', 'transaksi.id_produk', '=', 'produks.id_produk')->get();
        $couriers = Courier::pluck('title', 'code');
        $provinces = Province::pluck('title', 'province_id');

        $produk=Produk::where('id_produk',$id)->get();

        // dd($couriers);
        // return view('pages.form_transaksi', ['form_transaksi' =>$form_transaksi]);
        return view('pages.form_transaksi', compact('form_transaksi','produk','provinces','couriers'));
    }

    public function index_userlogin()
    {

        $transaksi = Infotransaksi::all();

        // dd($items= Infosampah::all());
        return view('pages.transaksi_userlogin', ['transaksi' =>$transaksi]);
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

    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request -> city_origin,     // ID kota/kabupaten asal
            'destination'   => $request -> city_destination,// ID kota/kabupaten tujuan
            'weight'        => $request -> weight,          // berat barang dalam gram
            'courier'       => $request ->  courier,      // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();

        return response()->json($cost);

    }


    public function data()
    {
        //$transaksi = DB::table('transaksi')->get();
        $transaksi =Transaksi::join('produks', 'transaksi.id_produk', '=', 'produks.id_produk')->get();
        $produk = DB::table('produks')->get();

        // return $edulevels;
        return view('transaksi.data', compact('transaksi', 'produk'));
    }

    public function barang_terjual($id)
    {
        //$transaksi = DB::table('transaksi')->get();
        $barang_terjual =Transaksi::join('produks', 'transaksi.id_produk', '=', 'produks.id_produk')->where('produks.id_produk',$id)->get();
        // dd($transaksi);

        // return $edulevels;
        return view('transaksi.barang_terjual', ['barang_terjual' =>$barang_terjual]);
    }

    public function details($id)
    {
        //$transaksi = DB::table('transaksi')->get();
        $barang_terjual =Transaksi::join('produks', 'transaksi.id_produk', '=', 'produks.id_produk')->get();
        // dd($transaksi);

        // return $edulevels;
        return view('transaksi.barang_terjual', ['barang_terjual' =>$barang_terjual]);
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
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'telephon' => 'required',
            'berat_produk' => 'required',
            'berat' => 'required',
            'jasa_pengiriman' => 'required',
            'id_produk' => 'required',
            'ongkir'    => 'required',
            //'bukti_tf' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        // if ($image = $request->file('bukti_tf')) {
        //     $destinationPath = 'public/assets/bukti_tf/';

        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

        //     $image->move($destinationPath, $profileImage);
        // // dd($image);

        //     $input['bukti_tf'] = "$profileImage";
        // // dd($input);

        // }
        // dd($input);
        Transaksi::create($input);

        return redirect('/daftar-pesanan');

    }

    public function detail($id)
    {
        $detail =Transaksi::join('produks', 'transaksi.id_produk', '=', 'produks.id_produk')->where('id',$id)->FirstOrFail();
        // $d = Transaksi::all();
        // $detail = Transaksi::join('produks', 'produks.id_produk', '=', 'transaksi.id_produk')
        //         ->where('id',$id)
        //        ->get('*');
// dd($detail);
        return view('pages.detailpesanan',compact('detail'));
    }

    public function daftarPesanan()
    {
        $pesanan =Transaksi::where('name',auth()->user()->name)->get();
        return view('pages.daftar_pesanan',compact('pesanan'));

    }

    public function pembayaran($id)
    {

        $item =Transaksi::where('id',$id)->FirstOrFail();
        return view('pages.pembayaran',compact('item'));
    }

    public function pembayaranStore(Request $request, $id)
    {
        // $item =Transaksi::where('id',$id)->FirstOrFail();
        if ($image = $request->file('bukti_tf')) {
            $destinationPath = 'public/assets/bukti_tf/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);


            $input['bukti_tf'] = "$profileImage";


        }

        $pembayaran=Transaksi::where('id',$id)
        ->update([
                'status_pengiriman'=>"Sedang Di Proses",
                // 'bukti_tf'=>$request->bukti,
                'bukti_tf' => $input['bukti_tf'],

        ]);


        // dd($request->bukti_tf);
        // Transaksi::create($input);

        return redirect('/daftar-pesanan');
    }


}
