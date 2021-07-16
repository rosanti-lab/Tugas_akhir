<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function logout() {
          Auth::logout();
          return redirect('/');
    }


    public function login() {
        return view('login.login');
  }

  public function postlogin(Request $request) {
    if(Auth::attempt($request->only('email','password'))){
        if($request->user()->akses=='user'){
            return redirect('/');
        }else{
            return redirect('/adm');
        }
    }
        return redirect('/login');
  }
  public function register() {
    return view('login.register');
}

    protected function post_register(Request $request) {
         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'no_hp' => $request['no_hp'],
            'alamat' => $request['alamat'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/login');
    }
    
}

      
    //   $user = Auth::user();
    
    //   if(!$user) {
    //    return Redirect::to('/');
    //   } else {
    //    Auth::logout();
    //   }
    // }

