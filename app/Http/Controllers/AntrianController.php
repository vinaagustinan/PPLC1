<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function formAntrian(){
        return view('petani.formAntrian')
    }
}
