<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pabrik;

class PabrikController extends Controller{
  public function __construct(){
    $this->middleware('auth');
  }
  public function akun(){
      return view('pabrik.akun');
  }
  public function home(){
      return view('pabrik.home');
  }
  public function dataRendemen(){
    $data_rendemen = \App\Admin::all(); //mengambil semua data pada database
        return view('pabrik.dataRendemen',['data_rendemen'=> $data_rendemen]);
  }
}
