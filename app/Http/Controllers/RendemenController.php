<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Petani;
use App\User;
use App\Rendemen;
use DB;


class RendemenController extends Controller
{
  //Halaman Pabrik
    public function dataRendemen(){
        // $data_Rendemen = \App\Rendemen::all(); //mengambil semua data pada database
        $akun = auth::user()->Pabrik->id;
        $data_rendemen = DB::table('rendemen')
        -> join('antrian','antrian.id', '=', 'rendemen.id_antrian')
        -> select('rendemen.id_antrian','rendemen.BeratTebu','rendemen.NPP','rendemen.KNT','rendemen.PSHK','rendemen.WR','rendemen.HPB',
        'rendemen.hargaGiling','rendemen.rendemenSementara','rendemen.Biaya','antrian.pabrik_id')
        -> where ('antrian.pabrik_id','=', $akun)
        -> get();
      
        return view('pabrik.dataRendemen',['data_rendemen'=> $data_rendemen]);
    }

    public function tambahdataRendemen(){
      return view('pabrik.formRendemen');
    }

    public function create(Request $request){
      $this->validate($request, [
        'id_antrian' => 'required',
        'BeratTebu' => 'required',
        'NPP' => 'required',
        'KNT' => 'required',
        'HPB' => 'required',
        'PSHK' => 'required',
        'WR' => 'required',
        'hargaGiling' => 'required',
      ]);
      $rendemen = new \App\Rendemen;
      $rendemen->id_antrian = $request->id_antrian;
      $rendemen->BeratTebu = $request->BeratTebu;
      $rendemen->NPP = $request->NPP;
      $rendemen->KNT = $request->KNT;
      $rendemen->HPB = $request->HPB;
      $rendemen->PSHK = $request->PSHK;
      $rendemen->WR = $request->WR;
      $rendemen->hargaGiling = $request->hargaGiling;
      $rendemen->rendemenSementara = $request->NPP*$request->KNT*$request->HPB*$request->PSHK*$request->WR;
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
        'id_antrian' => $request->id_antrian,
        'BeratTebu' => $request->BeratTebu,
        'NPP' => $request->NPP,
        'KNT' => $request->KNT,
        'HPB' => $request->HPB,
        'PSHK' => $request->PSHK,
        'WR' => $request->WR,
        'hargaGiling' => $request->hargaGiling,
        'rendemenSementara' => $request->NPP*$request->KNT*$request->HPB*$request->PSHK*$request->WR,
        'Biaya' => $request->NPP*$request->KNT*$request->HPB*$request->PSHK*$request->WR*$request->BeratTebu*$request->hargaGiling,
      ]);

      return redirect ('pabrikRendemen')->with('sukses','Perubahan Data Rendemen berhasil disimpan');
    }

    //Halaman Petani
    public function dataRendemenPetani(){
      // $data_rendemen = Rendemen::where('id',Auth::Petani()->id)->get();
      $akun = auth::user()->Petani->id;
      $data_rendemen = DB::table('rendemen')
      -> join('antrian','antrian.id', '=', 'rendemen.id_antrian')
      -> select('rendemen.id_antrian','rendemen.BeratTebu','rendemen.NPP','rendemen.KNT','rendemen.PSHK','rendemen.WR',
      'rendemen.hargaGiling','rendemen.rendemenSementara','rendemen.Biaya','antrian.petani_id')
      -> where ('antrian.petani_id','=', $akun)
      -> get();
      return view('petani.dataRendemen',['data_rendemen'=> $data_rendemen]);
    }

    public function rincianRendemen($id){
      $data_rendemen = \App\Rendemen::find($id);
      return view('petani.rincianRendemen',['data_rendemen'=> $data_rendemen]);
    }
}
