<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pabrik;
use App\Petani;

class profilController extends Controller
{
    public function profilAdmin()
    {
        return view('admin.akun');
    }

    public function profilPetani()
    {
        return view('petani.akun');
    }

    public function profilPabrik()
    {
        return view('pabrik.akun');
    }


    public function updatePabrik(Request $request,$id)
    {

    $pabrik = Pabrik::findOrFail($id);

    $pabrik->update([
        'nama_pabrik'  => $request->nama_pabrik,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
    ]);
    
    return redirect ('/akunPabrik')->with('sukses','Data Berhasil diupdate');
    }

    public function updatePetani(Request $request,$id)
    {

    $Petani = Petani::findOrFail($id);

    $Petani->update([
        'nama'  => $request->nama,
        'no_hp' => $request->no_hp,
        'no_ktp' => $request->no_ktp,
        'alamat_lahan' => $request->alamat_lahan,
        'luas_lahan' => $request->luas_lahan,
    ]);
    
    return redirect ('/akunPetani')->with('sukses','Data Berhasil diupdate');;
    }
}
