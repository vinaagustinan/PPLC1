<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pabrik;
use App\Antrian;
use App\User;
use Auth;
use DB;

class AntrianController extends Controller
{

    public function dataAntrian(){
        $akun = auth::user()->Petani->id;
        $antrian = DB::table('antrian')
        
        -> join('pabrik','pabrik.id', '=', 'antrian.pabrik_id')
        -> select('antrian.NoAntrian','pabrik.nama','antrian.tanggal','antrian.jam','antrian.nopol','antrian.id','antrian.petani_id') 
        -> where ('antrian.petani_id','=', $akun)
        -> get();
        return view('petani.dataAntrian',['antrian'=> $antrian]);
    }

    public function dataAntrianPabrik(){
        // $data_antrian = Antrian::where('pabrik_id', Auth::user()->Pabrik()->id)->get();
        $akun = auth::user()->Pabrik->id;
        $data_antrian = DB::table('antrian')

        -> join('petani','petani.id', '=', 'antrian.petani_id')
        -> select('antrian.NoAntrian','petani.nama','antrian.tanggal','antrian.jam','antrian.nopol','antrian.id','antrian.pabrik_id')
        -> where ('antrian.pabrik_id','=', $akun)
        -> get();
        return view('pabrik.dataAntrian',compact('data_antrian'));
    }

    public function dataAntrianAdm(){
        // $data_antrian = Antrian::all();
        $data_antrian = DB::table('antrian')
        -> join('petani','petani.id', '=', 'antrian.petani_id')
        -> join('pabrik','pabrik.id','=','antrian.pabrik_id')
        -> select('antrian.NoAntrian','petani.nama','antrian.tanggal','antrian.jam','antrian.nopol','antrian.id','pabrik.nama_pabrik')
        -> get();
        return view('Admin.dataAntrian',compact('data_antrian'));
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
          'petani_id' => 'required',
          'pabrik_id' => 'required',
          'nopol' => 'required',
        ]);
        $antrian = new \App\Antrian;
    
        $antrian->petani_id = $request->petani_id;
        $antrian->pabrik_id = $request->pabrik_id;
        $antrian->nopol = $request->nopol;
        $antrian->save();

        return redirect ('/petaniAntrian')->with('sukses','Data Antrian Berhasil diInputkan. Silahkan Menuggu untuk Mendapatkan Nomor Antrian');
    }

    public function inputJadwal(Request $request, $id){
        $data_antrian = \App\Antrian::find($id);
        $data_antrian = DB::table('antrian')
        -> join('petani','petani.id', '=', 'antrian.petani_id')
        -> select('antrian.NoAntrian','petani.nama','antrian.tanggal','antrian.jam','antrian.nopol','antrian.id')
        -> first(); 
       
        return view('pabrik.formAntrian', compact('data_antrian'));
    }

    public function saveJadwal(Request $request, $id){
        $data_antrian = \App\Antrian::findOrFail($id);
        $data_antrian->update([        
        'NoAntrian' => $request->NoAntrian,
        'nama' => $request->nama,
        'tanggal' => $request->tanggal,
        'jam' => $request->jam,
        'nopol' => $request->nopol,
        ]);
        
        $rendemen = new \App\Rendemen;
        $insertedId = $data_antrian->id;
        $rendemen->id_antrian = $insertedId;
        $rendemen->save();

        return redirect()->route('antrian');
    }
}
