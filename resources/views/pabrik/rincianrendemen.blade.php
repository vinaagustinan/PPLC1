@extends('petani.menu')
@section('dataRendemen')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <h3 class="title-5 m-b-35">Rincian Data Rendemen</h3>
                    <form method="POST" action="/rincianrendemen/{{$data_Rendemen->id}}/rincian" class="col-md-6">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="NoAntrian">No Antrian</label>
                        <input type="text" class="form-control" id="NoAntrian" name="NoAntrian" placeholder="{{$data_Rendemen->NoAntrian}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="{{$data_Rendemen->tanggal}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="NilaiRendemen">Nilai Rendemen</label>
                        <input type="text" class="form-control" id="NilaiRendemen" name="NilaiRendemen" placeholder="{{$data_Rendemen->NilaiRendemen}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="DetailRendemen">Detail Pehitungan Rendemen</label>
                        <!-- <input type="textarea" class="form-control" id="NilaiRendemen"> -->
                        <textarea class="form-control" aria-label="With textarea" id="DetailRendemen" name="DetailRendemen" placeholder="{{$data_Rendemen->DetailRendemen}}" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <label for="BeratTebu">Berat Tebu (Kwintal)</label>
                        <input type="text" class="form-control" id="BeratTebu" name="BeratTebu" placeholder="{{$data_Rendemen->BeratTebu}}" readonly>
                    </div>
        

                    <a href="/pabrikRendemen" type="button" class="btn btn-primary">Kembali</a>
           
                    </form>
            </div>
        </div>
    </div>
@endsection