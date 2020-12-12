<?php

namespace App\Http\Controllers;

use Auth;
use App\Petani;
use App\Pabrik;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller{
  public function registerPetani()
  {
    return view('auth.registerPetani');
  }

  public function registerPabrik()
  {
    return view('auth.registerPabrik');
  }

  public function doRegisterPetani(Request $request)
  {
    $email = $request->input('email');
    $password = bcrypt($request->input('password'));
    $nama = $request->input('nama');
    $noHP = $request->input('nohp');
    $noKTP = $request->input('noktp');
    $alamatLahan = $request->input('alamatlahan');
    $luasLahan = $request->input('luaslahan');
    $status = $request->input('status');
    
    $petani = new Petani; // initialize petani model
    $user = new User; // initialize user model

    $user->email = $email;
    $user->password = $password;
    $user->aktor = 'Petani';
    $user->save(); // save user

    $insertedId = $user->id;

    $petani->nama = $nama;
    $petani->no_hp = $noHP;
    $petani->no_ktp = $noKTP;
    $petani->alamat_lahan = $alamatLahan;
    $petani->luas_lahan = $luasLahan;
    $petani->status = $status;
    $petani->user_id = $insertedId;

    $petani->save(); // save petani

    return redirect('/loginPage')->with('Sukses','Pendaftaran Akun Berhasil');
  }

  public function doRegisterPabrik(Request $request)
  {
    $email = $request->input('email');
    $password = bcrypt($request->input('password'));
    $nama_pabrik = $request->input('nama_pabrik');
    $noHP = $request->input('nohp');
    $alamat = $request->input('alamat');
    $status = $request->input('status');  
    $pabrik = new Pabrik; // initialize petani model
    $user = new User; // initialize user model

    $user->email = $email;
    $user->password = $password;
    $user->aktor = 'Pabrik';
    $user->save(); // save user

    $insertedId = $user->id;

    $pabrik->nama_pabrik = $nama_pabrik;
    $pabrik->no_hp = $noHP;
    $pabrik->alamat = $alamat;
    $pabrik->status = $status;
    $pabrik->user_id = $insertedId;

    $pabrik->save(); // save pabrik

    return redirect("/loginPage")->with('Sukses','Pendaftaran Akun Berhasil');
  }
}