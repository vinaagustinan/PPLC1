<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaniController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function home(){
        return view('petani.home');
    }
    public function akun(){
        return view('petani.akun');
    }
}
