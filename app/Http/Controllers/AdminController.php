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
    public function add()
    {
        return view('admin.add');
    }

    public function addProcess(Request $request)
    {

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->no_hp = $request->no_hp;
        $admin->alamat = $request->alamat;
        $admin->role = $request->role;
        $admin->email = $request->email;
        $admin->password = $request->password;

        $admin->save();

        return redirect('/admin');

    }

    public function destroy($id)
    {
        $admin = Admin::where('id',$id);
        $admin->delete();
        return redirect('/admin');
    }
}
