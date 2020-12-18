<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pabrik;
use Illuminate\Support\Str;
use Auth;
use Hash;
use Validator;
use App\User;
// use Illuminate\Auth\Pabrik;

class PabrikController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function home(){
        return view('pabrik.home');
    }

    public function dataRendemen(){
      $data_rendemen = \App\Admin::all(); //mengambil semua data pada database
          return view('pabrik.dataRendemen',['data_rendemen'=> $data_rendemen]);
    }
    public function change(){
        return view('pabrik.ubahPassword');
    }

    public function updatepass(){
        // custom validator
        Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, \Auth::user()->password);
        });

        // message for custom validation
        $messages = [
            'password' => 'Password anda salah.',
            'required' => 'Data Harus diisi.',
            'confirmed' => 'Konfirmasi Password Salah',
            'same' => 'Konfirmasi Password Salah',
        ];

        // validate form
        $validator = Validator::make(request()->all(), [
            'current_password'      => 'required|password',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|same:password',

        ], $messages);

        // if validation fails
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }

        // update password
        $user = User::find(Auth::id());

        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('/loginPage')->withSuccess('Password berhasil diganti.');
    }
  
}
