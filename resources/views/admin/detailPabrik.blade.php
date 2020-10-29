@extends('admin.menu')
@section('detailPabrik')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Rincian Data Pabrik</h3>
                <form class="/admPabrik/{{$data_pabrik->id}}/update" method="POST">
                  <div class="form-group">
                    <label for="nama">Nama Pabrik</label>
                    <input type="text" class="form-control" id="nama" placeholder="{{$data_pabrik->nama}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="{{$data_pabrik->alamat}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" placeholder="{{$data_pabrik->no_hp}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="{{$data_pabrik->email}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="{{$data_pabrik->password}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" value="{{$data_pabrik->password}}">
                      <option value="Aktif" @if($data_pabrik->status == 'aktif') selected @endif>Aktif</option>
                      <option value="Tidak Aktif" @if($data_pabrik->status == 'tidak aktif') selected @endif>Tidak Aktif</option>
                    </select>
                  </div>
                </form><br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/admPabrik" type="button" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</section>            
@endsection