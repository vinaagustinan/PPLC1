@extends('petani.menu')
@section('akun')
<section class="p-t-20">
    <div class="container">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Profil Akun Saya</h3>
                <form method="POST" action="/akunPetani/{{auth::user()->Petani->id}}" class="col-md-6">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{auth()->user()->email}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{auth::user()->Petani->nama}}" >
                  </div><div class="form-group">
                  <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{auth::user()->Petani->no_hp}}">
                  </div>
                    <label for="no_ktp">NIK</label>
                    <input type="text" class="form-control" name="no_ktp" id="no_ktp" value="{{auth::user()->Petani->no_ktp}}" >
                  </div>
                  <div class="form-group">
                    <label for="alamat_lahan">Alamat Lahan</label>
                    <input type="text" class="form-control" name="alamat_lahan" id="alamat_lahan" value="{{auth::user()->Petani->alamat_lahan}}" >
                  </div>
                  <div class="form-group">
                    <label for="luas_lahan">Luas Lahan</label>
                    <input type="text" class="form-control" name="luas_lahan" id="luas_lahan" value="{{auth::user()->Petani->luas_lahan}}" >
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="/homePetani" type="button" class="btn btn-secondary">Kembali</a>
                </form><br>

            </div>
        </div>
    </div>
</section>
@endsection