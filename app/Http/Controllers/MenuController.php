<?php

namespace App\Http\Controllers;


use App\Models\About;


class MenuController extends Controller
{
    public function index()
    {
        $items = About::all();
        $testi = Testimonial::orderby('id','DESC')->take(2)->get();
        $contacts = Contact::all();
        $mobil1 = Car::find([1]);
        $mobil2 = Car::find([2]);
        $mobil3 = Car::find([3]);
        $slides = Slide::find([1]);
        $slide2 = Slide::find([2]);
        $slide3 = Slide::find([3]);
        
        return view('pages.home')->with([
            'items' => $items,
            'testi' => $testi,
            'contacts' => $contacts,
            'mobil1' => $mobil1,
            'mobil2' => $mobil2,
            'mobil3' => $mobil3,
            'slides' => $slides,
            'slide2' => $slide2,
            'slide3' => $slide3
        ]);
    }


    public function about()
    {
        $items = About::all();
        // $contacts = Contact::all();
        
        return view('pages.about')->with([
            'items' => $items,
            // 'contacts' => $contacts
        ]);
    }

}
