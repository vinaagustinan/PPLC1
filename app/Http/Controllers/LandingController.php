<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return view('landing.about');
    }
    public function contact(){
        return view('landing.contact');
    }
}
