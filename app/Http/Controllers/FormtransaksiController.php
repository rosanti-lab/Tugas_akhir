<?php

namespace App\Http\Controllers;
use App\Models\Formtransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormtransaksiController extends Controller
{
    public function index()
    {
        $items = Formtransaksi::all();

        return view('pages.form_transaksi')->with([
            'items' => $items
        ]);
    }
}