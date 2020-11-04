@extends('admin.menu')
@section('detailPetani')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Rincian Data Petani</h3>
                <form method="POST" action="/admPetani/{{$data_petani->id}}/update" enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="{{$data_petani->nama}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" placeholder="{{$data_petani->no_hp}}" readonly>
                  </div>
                  <!-- <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="{{$data_petani->alamat}}" readonly>
                  </div> -->
                  <div class="form-group">
                    <label for="alamat_lahan">Alamat Lahan</label>
                    <input type="text" class="form-control" id="alamat_lahan" placeholder="{{$data_petani->alamat_lahan}}" readonly>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="{{$data_petani->email}}" readonly>
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="{{$data_petani->password}}" readonly>
                  </div> -->
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                      <option value="aktif" @if($data_petani->status == 'aktif') selected @endif>Aktif</option>
                      <option value="tidak aktif" @if($data_petani->status == 'tidak aktif') selected @endif>Tidak Aktif</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="/notifPetani" type="button" class="btn btn-secondary">Kembali</a>
                </form><br>
            </div>
        </div>
    </div>
</section>            
@endsection