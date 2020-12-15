@extends('petani.menu')
@section('dataAntrian')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Form Antrian</h3>
                    <form method="POST" action="/pabrikAntrian/{{$data_antrian->id}}/update" class="col-md-6">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="NoAntrian">No Urut Antrian</label>
                        <input type="text" class="form-control" id="NoAntrian" name="NoAntrian" value="{{$data_antrian->NoAntrian}}" required oninvalid="this.setCustomValidity('Form data antrian harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="id_petani">ID Petani</label>
                        <input type="text" class="form-control" name="id_petani" id="id_petani" value="{{$data_antrian->id_petani}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{$data_antrian->tanggal}}" required oninvalid="this.setCustomValidity('Form data antrian harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="time" class="form-control" name="jam" id="jam" value="{{$data_antrian->jam}}" required oninvalid="this.setCustomValidity('Form data antrian harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="nopol">No Polisi Truk</label>
                        <input type="text" class="form-control" id="nopol" name="nopol" value="{{$data_antrian->nopol}}" readonly>
                    </div>
                    <a href="/pabrikAntrian" type="button" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
            </div>
        </div>
    </div>
@endsection