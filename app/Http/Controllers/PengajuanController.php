<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Infosampah;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $items = About::all();

    //     return view('pages.pengajuan')->with([
    //         'items' => $items
    //     ]);
    // }

    public function index()
    {

        $test = Infosampah::all();
        
        // dd($items= Infosampah::all());
        return view('pages.pengajuan', ['test' =>$test]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'photo' => 'required|image',
            'konten' => 'required'
        ]);

        $data = $request->all();
        $data['photo'] = $request->file('photo')->store(
            'about', 'public'
        );
       
        About::create($data);
        return redirect()->route('abouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = About::findOrFail($id);

        return view('pages.abouts.edit')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'max:255',
            'photo' => 'required|image',
            'konten' => 'required'
        ]);

        $data = $request->all();
        $data['photo'] = $request->file('photo')->store(
            'about', 'public'
        );
       
        $item = About::findOrFail($id);
        $item->update($data);

        return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = About::findOrFail($id);
        $item->delete();

        return redirect()->route('abouts.index');
    }

    public function pengajuan($id)
    {
        $nama = nama::where('id',$id)->FirstOrFail();        //nampilin produk sesuai id
        // $desain= desain::select('foto')->where('nama_kategori',$id)->get();                         //pilih desain
        // $bahan= hargabahan::select('id_bahan','bahan_ukuran')->where('nama_kategori',$id)->get();
        // $ukuran= ukuran::select('id_ukuran','ukuran')->where('nama_kategori',$id)->get();
        // $kat=\App\kategori::all();
        // $pro=kategori::where('id',$id)->get();

        return view('pelanggan.pesan',compact('produk','desain','bahan','ukuran','kat','pro'));
    }




    
}
