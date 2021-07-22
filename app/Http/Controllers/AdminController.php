<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function data()
    {
        $admin = DB::table('users')->get();

        
        return view('admin.data', ['users' =>$admin]);
    }

    public function destroy($id)
    {
        $admin = Admin::where('id',$id);
        $admin->delete();
        return redirect('/admin');
    }
}
