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

    public function tambahdataRendemen(){
      return view('pabrik.formRendemen');
    }

    public function create(Request $request){
      $this->validate($request, [
        'NoAntrian' => 'required',
        'tanggal' => 'required',
        'BeratTebu' => 'required',
        'NPP' => 'required',
        'KNT' => 'required',
        'HPB' => 'required',
        'PSHK' => 'required',
        'WR' => 'required',
        'hargaGiling' => 'required',
      ]);
      $rendemen = new \App\Rendemen;
      $rendemen->NoAntrian = $request->NoAntrian;
      $rendemen->tanggal = $request->tanggal;
      $rendemen->BeratTebu = $request->BeratTebu;
      $rendemen->NPP = $request->NPP;
      $rendemen->KNT = $request->KNT;
      $rendemen->HPB = $request->HPB;
      $rendemen->PSHK = $request->PSHK;
      $rendemen->WR = $request->WR;
      $rendemen->hargaGiling = $request->hargaGiling;
      $rendemen->NilaiRendemen = $request->NPP*$request->KNT*$request->HPB*$request->PSHK*$request->WR;
      $rendemen->Biaya = $request->NPP*$request->KNT*$request->HPB*$request->PSHK*$request->WR*$request->BeratTebu*$request->hargaGiling;
      $rendemen->save();

      return redirect ('/pabrikRendemen')->with('sukses','Data Rendemen berhasil disimpan');
    }

    public function editdataRendemen($id){
      $data_Rendemen = \App\Rendemen::find($id); 
      return view('pabrik.editRendemen', ['data_Rendemen'=> $data_Rendemen]);
    }

    public function updatedataRendemen(Request $request,$id){
      // $data_Rendemen = \App\Rendemen::find($id); 
      // $data_Rendemen->update($request->all());
      // return redirect ('/pabrikRendemen')->with('sukses','Perubahan Data Rendemen berhasil disimpan');
      $Rendemen = Rendemen::findOrFail($id);
      $Rendemen->update([
        'NoAntrian' => $request->NoAntrian,
        'Tanggal' => $request->tanggal,
        'BeratTebu' => $request->BeratTebu,
        'NPP' => $request->NPP,
        'KNT' => $request->KNT,
        'HPB' => $request->HPB,
        'PSHK' => $request->PSHK,
        'WR' => $request->WR,
        'hargaGiling' => $request->hargaGiling,
        'NilaiRendemen' => $request->NPP*$request->KNT*$request->HPB*$request->PSHK*$request->WR,
        'Biaya' => $request->NPP*$request->KNT*$request->HPB*$request->PSHK*$request->WR*$request->BeratTebu*$request->hargaGiling,
      ]);

      return redirect ('pabrikRendemen')->with('sukses','Perubahan Data Rendemen berhasil disimpan');
    }
    
    public function rincianRendemen($id)
    {
      $data_Rendemen = \App\Rendemen::find($id); 
      return view('petani.rincianRendemen', ['data_rendemen'=> $data_Rendemen]);
    }
}
