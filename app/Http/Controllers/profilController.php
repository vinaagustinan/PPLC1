<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


    public function update(Request $request,$id)
    {
      $user = \App\User::find($id);
      $user->update($request->all());
      if($request->hasFile('avatar')){
      $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
      $user->avatar=$request->file('avatar')->getClientOriginalName();
      $user->save();
    }
    return redirect('/profilmitra')->with('sukses','Data Berhasil diupdate');
    }
}
