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
      $this->validate($request,[
        'email' => 'required',
        'password' => 'required',
        'confirmation' => 'required|same:password',
        'nama' => 'required',
        'no_hp' => 'required',
        'no_ktp' => 'required',
        'alamat_lahan' => 'required',
        'luas_lahan'=> 'required',     
      ]);

    $petani = new Petani; // initialize petani model
    $user = new User; // initialize user model

    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->aktor = 'Petani';
    $user->save(); // save user

    $insertedId = $user->id;

    $petani->nama = $request->input('nama');
    $petani->no_hp = $request->input('no_hp');
    $petani->no_ktp = $request->input('no_ktp');
    $petani->alamat_lahan =$request->input('alamat_lahan');
    $petani->luas_lahan = $request->input('luas_lahan');
    $petani->user_id = $insertedId;
    $petani->save(); // save petani

    return redirect('/loginPage')->with('Sukses','Pendaftaran Akun Berhasil');
  }

  public function doRegisterPabrik(Request $request)
  {
      $this->validate($request,[
      'email' => 'required',
      'password' => 'required',
      'nama' => 'required',
      'no_hp' => 'required',
      'alamat' => 'required',
      'password'=> 'required',
      'confirmation' => 'required|same:password',
      
    ]);

    $pabrik = new Pabrik; // initialize petani model
    $user = new User; // initialize user model

    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->aktor = 'Pabrik';
    $user->save();

    $insertedId = $user->id;

    $pabrik->nama = $request->input('nama');
    $pabrik->no_hp = $request->input('no_hp');
    $pabrik->alamat = $request->input('alamat');
    $pabrik->user_id = $insertedId;
    $pabrik->save(); // save pabrik

    return redirect("/loginPage")->with('Sukses','Pendaftaran Akun Berhasil');
  }
}