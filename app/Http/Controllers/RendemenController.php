<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rendemen;

class RendemenController extends Controller
{
    public function dataRendemen(){
        $data_Rendemen = \App\Rendemen::all(); //mengambil semua data pada database
        return view('pabrik.dataRendemen',['data_Rendemen'=> $data_Rendemen]);
    }
    public function tambahdataRendemen()
    {
      return view('pabrik.formRendemen');
    }
    public function create(Request $request)
    {
      \App\Rendemen::create($request->all());
      return redirect ('/pabrikRendemen')->with('sukses','Data Rendemen berhasil disimpan');

    }
    public function editdataRendemen($id)
    {
      $data_Rendemen = \App\Rendemen::find($id); 
      return view('pabrik.editRendemen', ['data_Rendemen'=> $data_Rendemen]);
    }
    public function updatedataRendemen(Request $request,$id)
    {
      $data_Rendemen = \App\Rendemen::find($id); 
      $data_Rendemen->update($request->all());
      return redirect ('/pabrikRendemen')->with('sukses','Perubahan Data Rendemen berhasil disimpan');

    }
    public function rinciandataRendemen($id)
    {
      $data_Rendemen = \App\Rendemen::find($id); 
      return view('pabrik.rincianrendemen', ['data_Rendemen'=> $data_Rendemen]);
    }

}
