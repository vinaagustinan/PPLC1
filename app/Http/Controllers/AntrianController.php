<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pabrik;
use App\Antrian;
use App\User;

class AntrianController extends Controller
{

    public function dataAntrian(){
        // $data_Rendemen = \App\Rendemen::all(); //mengambil semua data pada database
        return view('petani.dataAntrian');
    }

    public function dataAntrianPabrik(){
        $antrian = Antrian::all();
        return view('pabrik.dataAntrian',['antrian'=> $antrian]);
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
            'id' => 'required',
            'nama_pabrik' => 'required',
            'nopol' => 'required',
          ]);
          $antrian = new \App\Antrian;
     
          $antrian->id_petani = $request->id;
          $antrian->id_pabrik = $request->nama_pabrik;
        //   $antrian->no_hp = $request->no_hp;
          $antrian->nopol = $request->nopol;
          $antrian->save();

          return redirect ('/petaniAntrian')->with('sukses','Data Antrian Berhasil diInputkan. Silahkan Menuggu untuk Mendapatkan Nomor Antrian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request.
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
