<?php

namespace App\Http\Controllers;
use App\Models\Profil;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function data()
    {
        $profil = DB::table('profil')->get();

        // return $edulevels;
        return view('profil.data', ['profil' =>$profil]);
    }

    public function add()
    {
        return view('profil.add');
    }

    public function addProcess(Request $request)
    {

        $profil = new Profil;
        $profil->judul = $request->judul;
        $profil->konten = $request->konten;

        $profil->save();

        return redirect('/profil');
    
    }

    public function edit($id)
    {
        $item = Profil::where('id_profil',$id)->FirstOrFail();
        $profil = DB::table('profil')->where('id_profil',$id)->get();
        return view('profil.edit',compact('profil','item'));
    }

    public function update(Request $request, $id)
    {
        $profil=Profil::where('id_profil',$id)
            ->update([
                'judul'=>$request->judul,             //nama dari database->nama dari form input
                'konten'=>$request->konten,

            ]);
            return redirect('/profil');
    }

    public function destroy($id)
    {
        $profil = Profil::where('id_profil',$id);
        $profil->delete();
        return redirect('/profil');
    }
}
