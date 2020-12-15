<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pabrik;
use App\Antrian;
use App\User;

class AntrianController extends Controller
{

    public function dataAntrian(){
        // $data_Rendemen = \App\Rendemen::all(); //mengambil semua data pada database
        return view('petani.dataAntrian');
    }

    public function dataAntrianPabrik(){
        $data_antrian = Antrian::all();
        return view('pabrik.dataAntrian',['data_antrian'=> $data_antrian]);
    }

    public function ambilAntrian(){
        
        $pabrik = Pabrik::all();
        return view('petani.formAntrian', compact('pabrik'));
    }

    public function inputAntrian(){
        
        $antrian = Antrian::all();
        return view('pabrik.formAntrian', compact('pabrik'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
          'id_petani' => 'required',
          'id_pabrik' => 'required',
          'nopol' => 'required',
        ]);
        $antrian = new \App\Antrian;
    
        $antrian->id_petani = $request->id_petani;
        $antrian->id_pabrik = $request->id_pabrik;
        $antrian->nopol = $request->nopol;
        $antrian->save();

        return redirect ('/petaniAntrian')->with('sukses','Data Antrian Berhasil diInputkan. Silahkan Menuggu untuk Mendapatkan Nomor Antrian');
    }

    public function inputJadwal(Request $request, $id){
        $data_antrian = \App\Antrian::find($id); 
        return view('pabrik.formAntrian',['data_antrian'=> $data_antrian]);
    }

    public function saveJadwal(Request $request, $id){
        $data_antrian = \App\Antrian::find($id); 
        $data_antrian->update($request->all());
        

          $data_antrian = new \App\Rendemen;
      
          $data_antrian->NoAntrian = $request->NoAntrian;
          $data_antrian->tanggal = $request->tanggal;
          $data_antrian->save();
  
          return redirect ('/petaniAntrian');
    }
}
