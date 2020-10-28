<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
      return view('admin.dashboard');
    }
    public function dataAdmin(){
        return view('admin.dataAdmin');
    }
    public function dataPabrik(){
        return view('admin.dataPabrik');
    }
    public function dataPetani(){
        return view('admin.dataPetani');
    }
    public function dataRendemen(){
        return view('admin.dataRendemen');
    }
    public function dataAntrian(){
        return view('admin.dataAntrian');
    }
}
