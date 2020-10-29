@extends('admin.menu')
@section('detailAdmin')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Rincian Data Admin</h3>
                <form>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="{{$data_admin->nama}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" placeholder="{{$data_admin->no_hp}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="{{$data_admin->email}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="{{$data_admin->password}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" value="{{$data_admin->status}}">
                      <option value="Aktif" @if($data_admin->status == 'aktif') selected @endif>Aktif</option>
                      <option value="Tidak Aktif" @if($data_admin->status == 'tidak aktif') selected @endif>Tidak Aktif</option>
                    </select>
                  </div>
                </form><br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/admAdmin" type="button" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</section>            
@endsection