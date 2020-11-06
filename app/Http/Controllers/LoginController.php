<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller{
  public function login(){
    return view('auth.loginPage');
  }
  public function postlogin(Request $request){

    if(Auth::attempt($request->only('email','password'))){
      if (Auth::check() && Auth::user()->aktor == 'Petani') 
      {
          return redirect('/homePetani');
      }
      else if (Auth::check() && Auth::user()->aktor == 'Pabrik') {
          return redirect('/homePabrik');
      }
      else if (Auth::check() && Auth::user()->aktor == 'Admin') {
          return redirect('/homeAdmin');
      }
    }
  
  
    else {
          return redirect('/loginPage')->with('error','Data yang anda masukkan tidak sesuai');
      }
  }  
  
  public function logout(){
    Auth::logout();
    return redirect('/');
  }
}
