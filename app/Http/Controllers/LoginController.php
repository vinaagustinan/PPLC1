<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller{
  public function login(){
    return view('auth.loginPage');
  }
  public function postlogin(Request $request){
    // dd($request->all());
    if(Auth::attempt($request->only('email','password'))){
        return redirect('admin.dashboard');
    }
    return redirect('loginPage');
  }
  // public function homeAdmin(){
  //   return view('admin.dashboard');
  // }
  // public function homePabrik(){
  //   return view('pebrik.dasboard');
  // }
  // public function homePetani(){
  //   return view('petani.dasboard');
  // }
  public function logout(){
    Auth::logout();
    return redirect('/');
  }
}