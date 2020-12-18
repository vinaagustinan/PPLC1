@extends('pabrik.menu')
@section('dataRendemen')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <h3 class="title-5 m-b-35">Edit Data Rendemen</h3>
                    <form method="POST" action="/pabrikRendemen/{{$data_Rendemen->id}}/update" class="col-md-6">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="id_antrian">ID Antrian</label>
                        <input type="text" class="form-control" id="id_antrian" name="id_antrian" value="{{$data_Rendemen->id_antrian}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="BeratTebu">Berat Tebu (Kg)</label>
                        <input type="text" class="form-control" id="BeratTebu" name="BeratTebu"  value="{{$data_Rendemen->BeratTebu}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="NPP">Nira</label>
                        <input type="text" class="form-control" id="NPP" name="NPP" value="{{$data_Rendemen->NPP}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="KNT">Kadar Nira Tebu</label>
                        <input type="text" class="form-control" id="KNT" name="KNT" value="{{$data_Rendemen->KNT}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="HPB">Hasil Peneraan Brix</label>
                        <input type="text" class="form-control" id="HPB" name="HPB" value="{{$data_Rendemen->HPB}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="PSHK">Perbandingan Setara Harkat Kemurnian</label>
                        <input type="text" class="form-control" id="PSHK" name="PSHK" value="{{$data_Rendemen->PSHK}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="WR">Winter Rendemen</label>
                        <input type="text" class="form-control" id="WR" name="WR" value="{{$data_Rendemen->WR}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="hargaGiling">Harga Giling (/Kg)</label>
                        <input type="text" class="form-control" id="hargaGiling" name="hargaGiling" value="{{$data_Rendemen->hargaGiling}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>

                    <a href="/pabrikRendemen" type="button" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
            </div>
        </div>
    </div>
@endsection