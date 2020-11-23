<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rendemen;

class RendemenController extends Controller
{
    public function dataRendemen(){
        $data_Rendemen = \App\Rendemen::all(); //mengambil semua data pada database
        return view('pabrik.dataRendemen',['data_Rendemen'=> $data_Rendemen]);
    }
    public function tambahdataRendemen()
    {
      return view('pabrik.formRendemen');
    }
    public function create(Request $request)
    {
      \App\Rendemen::create($request->all());
      return redirect ('/pabrikRendemen')->with('sukses','Data Rendemen berhasil disimpan');

    }
    public function editdataRendemen($id)
    {
      $data_Rendemen = \App\Rendemen::find($id); 
      return view('pabrik.editRendemen', ['data_Rendemen'=> $data_Rendemen]);
    }
    public function updatedataRendemen(Request $request,$id)
    {
      $data_Rendemen = \App\Rendemen::find($id); 
      $data_Rendemen->update($request->all());
      return redirect ('/pabrikRendemen')->with('sukses','Perubahan Data Rendemen berhasil disimpan');

    }
    public function rinciandataRendemen($id)
    {
      $data_Rendemen = \App\Rendemen::find($id); 
      return view('pabrik.rincianrendemen', ['data_Rendemen'=> $data_Rendemen]);
    }



      // $this->validate($request,[
      //   'NoAntrian' => 'required',
      //   'tanggal' => 'reqiured',
      //   'NilaiRendemen' => 'reqiured',
      //   'DetailRendemen' => 'reqiured',
      //   'BeratTebu' => 'reqiured',
      // ]);

        // $data_Rendemen = \App\Rendemen::find($id); 
        // $data_Rendemen->update([
        //   'NoAntrian'=>$data_Rendemen['NoAntrian'],
        //   'tanggal'=>$data_Rendemen['tanggal'],
        //   'NilaiRendemen'=>$data_Rendemen['NilaiRendemen'],
        //   'DetailRendemen'=>$data_Rendemen['DetailRendemen'],
        //   'BeratTebu'=>$data_Rendemen['BeratTebu'],
        // ]);
        // $data_Rendemen->save();
          
        // return redirect ('/pabrikRendemen');
    


      // $data_Rendemen = \App\Rendemen::find($id);
    
      // $data_Rendemen->NoAntrian=$request->input('NoAntrian');
      // $data_Rendemen->tanggal=$request->input('tanggal');
      // $data_Rendemen->NilaiRendemen=$request->input('NilaiRendemen');
      // $data_Rendemen->DetailRendemen=$request->input('DetailRendemen');
      // $data_Rendemen->BeratTebu=$request->input('BeratTebu');
      // $data_Rendemen->save();

      


    // public function rincianRendemen($id)
    // {
    //   $data_Rendemen = \App\Rendemen::find($id); 
    //   return view('pabrik.rincianRendemen',['data_Rendemen'=> $data_Rendemen]);
    // }

}
