@extends('pabrik.menu')
@section('akun')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Profil Akun Saya</h3>
                <form method="POST" action="/updateProfil" class="col-md-6">
                {{csrf_field()}}
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" value="{{auth::user()->Pabrik->nama_pabrik}}" >
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" value="{{auth::user()->Pabrik->alamat}}" >
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" value="{{auth::user()->Pabrik->no_hp}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="email" value="{{auth::user()->email}}" readonly>
                  </div>
                  
                </form><br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/admAdmin" type="button" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection