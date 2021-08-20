<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Darryldecode\Cart\Cart;
// use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $user = $request->session()->get(Auth::user())->id;

        // dd($user);
        // $item = \Cart::getContent();
        // return "cek";
        return view('pages.carts');
    }

    // public function store(Produk $produk)
    // {
    //         $cart=Cart::session(auth()->id)->add(array(
    //         'id_produk' => $produk->id_produk,
    //         'nama' => $produk->id_produk,
    //         'harga' => $produk->id_produk,
    //     ));
    //     dd($cart);
    // }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Cart::session($produk);
        $params = $request->except('_token');
        // dd($params);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function show(Request $request,$id)
    {

        // $show = Produk::all();
        //$form_transaksi =Transaksi::join('produks', 'transaksi.id_produk', '=', 'produks.id_produk')->get();
        // $couriers = Courier::pluck('title', 'code');
        // $provinces = Province::pluck('title', 'province_id');

        $produk=Produk::where('id_produk',$id)->get();              //show.blade.php

        // $cek=Cart::session($produk)->add(array(
        // 'berat_produk'=>$request->berat_produk,
        // ));
        // dd($cek);
        // dd($couriers);
        // return view('pages.form_transaksi', ['form_transaksi' =>$form_transaksi]);
        return view('pages.show', compact('produk'));
    }
}
