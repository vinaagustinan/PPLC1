<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller{
    // public function home(){
    //   return view('admin.dashboard');
    // }
    public function dataAdmin(){
        $data_admin = \App\Admin::all(); //mengambil semua data pada database
        return view('admin.dataAdmin',['data_admin'=> $data_admin]);
    }
    public function detail(){
        return view('admin.detailAdmin');
    }
    public function dataPabrik(){
        $data_pabrik = \App\Pabrik::all(); //mengambil semua data pada database
        return view('admin.dataPabrik',['data_pabrik'=> $data_pabrik]);
    }
    public function dataPetani(){
        $data_petani = \App\Petani::all(); //mengambil semua data pada database
        return view('admin.dataPetani',['data_petani'=> $data_petani]);
    }
    public function dataRendemen(){
        return view('admin.dataRendemen');
    }
    public function dataAntrian(){
        return view('admin.dataAntrian');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
