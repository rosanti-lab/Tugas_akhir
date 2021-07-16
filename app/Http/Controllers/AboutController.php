<?php

namespace App\Http\Controllers;
use App\Models\About;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{   

    public function index()
    {
        $items = About::all();

        return view('pages.about_user')->with([
            'items' => $items
        ]);
    }

    public function data()
    {
        $about = DB::table('abouts')->get();

        // return $edulevels;
        return view('about.data', ['about' =>$about]);
    }

    public function add()
    {
        return view('about.add');
    }

    public function addProcess(Request $request)
    {

        $about = new About;
        $about->title = $request->title;
        $about->photo = $request->photo;
        $about->konten = $request->konten;

        $about->save();

        return redirect('/about');
    
    }

    public function edit($id)
    {
        $item = About::where('id',$id)->FirstOrFail();
        $about = DB::table('abouts')->where('id',$id)->get();
        return view('about.edit',compact('about','item'));
    }

    public function update(Request $request, $id)
    {
        $about=About::where('id',$id)
            ->update([
                'title'=>$request->title, 
                'photo'=>$request->photo,         //nama dari database->nama dari form input
                'konten'=>$request->konten,

            ]);
            return redirect('/about');
    }

    public function destroy($id)
    {
        $about = About::where('id',$id);
        $about->delete();
        return redirect('/about');
    }
}