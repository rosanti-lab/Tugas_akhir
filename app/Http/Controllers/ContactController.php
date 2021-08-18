<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ContactController extends Controller
{
    public function index()
    {

        $contact = Contact::all();

        // dd($items= Infosampah::all());
        return view('pages.contact', ['contact' =>$contact]);
    }
}
