@extends('admin.menu')
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
                <form method="POST" action="/akunAdmin/{{auth::user()->Admin->id}}" class="col-md-6">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{auth::user()->Admin->nama}}">
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{auth::user()->Admin->no_hp}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}" readonly>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="/admAdmin" type="button" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection