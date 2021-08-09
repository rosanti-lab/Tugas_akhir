<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {

        $produk = Produk::all();

        // dd($items= Infosampah::all());
        return view('pages.produk', ['produk' =>$produk]);
    }


    public function data()
    {
        $produk = DB::table('produks')->get();

        return view('produk.data', ['produk' =>$produk]);
    }

    public function edit($id)
    {
        $item = Produk::where('id_produk',$id)->FirstOrFail();
        $produk = DB::table('produks')->where('id_produk',$id)->get();
        return view('produk.edit',compact('produk','item'));
    }

    public function update(Request $request, $id)
    {
        $produk=Produk::where('id_produk',$id)
            ->update([
                'nama'=>$request->nama,
                'deskripsi'=>$request->deskripsi,         //nama dari database->nama dari form input
                'harga'=>$request->harga,

            ]);
            return redirect('/produk');
    }


    public function add()
    {
        return view('produk.add');
    }

    public function addProcess(Request $request)
    {
        $produk = new Produk();


        $produk->nama = $request->nama;
        $produk->image = $request->image;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;


        $produk->save();

        return redirect('/produk');

    }

    public function destroy($id)
    {
        $produk = Produk::where('id_produk',$id);
        $produk->delete();
        return redirect('/produk');
    }
}
