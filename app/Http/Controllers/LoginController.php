<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login() {
        return view('login.login');
    }
    public function postlogin(Request $request) {
      if(Auth::attempt($request->only('email','password'))){
          if($request->user()->role=='user'){
              return redirect('/');
          }elseif($request->user()->role=='admin'){
              return redirect('/home');
          }else{
            return redirect('/homecsr');
        }
      }
          return redirect('/login');
    }
    public function register() {
      return view('login.register');
  }

  public function daftar() {
    return view('login.daftar');
    }

    protected function postDaftar(Request $request) {
      User::create([
         'name' => $request['name'],
         'email' => $request['email'],
         'alamat' => $request['alamat'],
         'role' => 'user',
         'password' => Hash::make($request['password']),
     ]);

     return redirect('/login');
    }
    public function logout() {
      Auth::logout();
      return redirect('/login');
}

}
