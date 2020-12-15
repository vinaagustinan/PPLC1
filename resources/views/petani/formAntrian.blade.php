@extends('petani.menu')
@section('dataAntrian')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Form Antrian</h3>
                    <form method="POST" action="/ambilAntrian/create" class="col-md-6">
                    {{csrf_field()}}
                    <div class="form-group">
                        <!-- <label for="nama">Nama</label> -->
                        <input type="hidden" class="form-control" id="nama" name="id" value="{{auth::user()->Petani->id}}" readonly>
                    </div>
                    <!-- <div class="form-group">
                        <label for="tanggal">No Hp</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{auth::user()->Petani->no_hp}}">
                    </div> -->
                    <div class="form-group">
                    <label for="nama_pabrik">Nama Pabrik</label>
                        <select class="form-control" name="nama_pabrik" id="user_id">
                            <option disabled value>Pilih Pabrik</option>
                            @foreach ($pabrik as $item)
                                <option 
                                    value="{{ $item->id }}">{{ $item->nama_pabrik }}
                                </option>
                            @endforeach
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nopol">No Polisi Truk</label>
                        <input type="text" class="form-control" id="nopol" name="nopol" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <a href="/pabrikRendemen" type="button" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
            </div>
        </div>
    </div>
@endsection