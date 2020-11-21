@extends('petani.menu')
@section('dataRendemen')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <h3 class="title-5 m-b-35">Edit Data Rendemen</h3>
                    <form method="POST" action="/pabrikRendemen/{{$data_Rendemen->id}}/update" class="col-md-6">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="NoAntrian">No Antrian</label>
                        <input type="text" class="form-control" id="NoAntrian" name="NoAntrian" placeholder="{{$data_Rendemen->NoAntrian}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua ')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal"  placeholder="{{$data_Rendemen->tanggal}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="NilaiRendemen">Nilai Rendemen</label>
                        <input type="text" class="form-control" id="NilaiRendemen" name="NilaiRendemen"  placeholder="{{$data_Rendemen->NilaiRendemen}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="DetailRendemen">Detail Pehitungan Rendemen</label>
                        <!-- <input type="textarea" class="form-control" id="NilaiRendemen"> -->
                        <textarea class="form-control" aria-label="With textarea" id="DetailRendemen" name="DetailRendemen" placeholder="{{$data_Rendemen->DetailRendemen}}"required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="BeratTebu">Berat Tebu (Kwintal)</label>
                        <input type="text" class="form-control" id="BeratTebu" name="BeratTebu"  placeholder="{{$data_Rendemen->BeratTebu}}" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
        

                    <a href="/pabrikRendemen" type="button" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
            </div>
        </div>
    </div>
@endsection