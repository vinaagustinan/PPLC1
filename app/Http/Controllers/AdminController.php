<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function home(){
        return view('admin.home');
    }
      public function dataAdmin(){
        $data_admin = \App\Admin::all(); //mengambil semua data pada database
        return view('admin.dataAdmin',['data_admin'=> $data_admin]);
    }
    public function detailAdmin($id){
        $data_admin = \App\Admin::find($id); 
        return view('admin.detailAdmin',['data_admin'=> $data_admin]);
    }
    public function dataPabrik(){        
        // $data_pabrik = \App\Pabrik::where('status', 'aktif')->get();
        $data_pabrik = \App\Pabrik::all();
        return view('admin.dataPabrik',['data_pabrik'=> $data_pabrik]);
    }
    public function editPabrik($id){
        $data_pabrik = \App\Pabrik::find($id); 
        return view('admin.detailPabrik',['data_pabrik'=> $data_pabrik]);
    }
    public function updatePabrik(Request $request,$id){
        $data_pabrik = \App\Pabrik::find($id); 
        $data_pabrik->update($request->all());
        return redirect ('/admPabrik');
    }
    public function dataPetani(){
        // $data_petani= \App\Petani::where('status', 'aktif')->get();
        $data_petani= \App\Petani::all();
        return view('admin.dataPetani',['data_petani'=> $data_petani]);
    }
    public function editPetani($id){
        $data_petani = \App\Petani::find($id); 
        return view('admin.detailPetani',['data_petani'=> $data_petani]);
    }
    public function updatePetani(Request $request,$id){
        $data_petani = \App\Petani::find($id); 
        $data_petani->update($request->all());
        return redirect ('/admPetani');
    }
    public function dataAntrian(){
        return view('admin.dataAntrian');
    }
    // public function notifPabrik(){
    //     $data_pabrik = \App\Pabrik::where('status', 'tidak aktif')->get();
    //     return view('admin.notifPabrik',['data_pabrik'=> $data_pabrik]);
    // }
    // public function notifPetani(){
    //     $data_petani = \App\Petani::where('status', 'tidak aktif')->get();
    //     return view('admin.notifPetani',['data_petani'=> $data_petani]);
    // }
    // public function akun($id){
    //     $data_admin = \App\Admin::find($id); 
    //     return view('admin.akun',['data_admin'=> $data_admin]);
    // }
    public function dataRendemen(){
        $data_rendemen = \App\Rendemen::all();
        return view('admin.dataRendemen',['data_rendemen'=> $data_rendemen]);
    }
    public function rincianRendemen($id){
        $data_rendemen = \App\Rendemen::find($id);
        return view('admin.rincianRendemen',['data_rendemen'=> $data_rendemen]);
    }
}
