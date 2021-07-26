<?php

namespace App\Http\Controllers;
use App\Models\Csrsampahorganik;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CsrsampahorganikController extends Controller
{
    public function data()
    {
        $sampah = DB::table('mon_sampah')->get();


        return view('csr_sampahorganik.data', ['sampah' =>$sampah]);
    }


}
