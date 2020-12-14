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

    public function ambilAntrian(){
        
        $pabrik = Pabrik::all();
        return view('petani.formAntrian', compact('pabrik'));
    }



    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'NoAntrian' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'nopol' => 'required',
          ]);
          $antrian = new \App\Antrian;
          $antrian->NoAntrian = $request->NoAntrian;
          $antrian->tanggal = $request->tanggal;
          $antrian->jam = $request->jam;
          $antrian->nopol = $request->nopol;
          $antrian->save();
          return redirect ('/petaniAntrian')->with('sukses','Perubahan Data Rendemen berhasil disimpan');
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
