@extends('admin.layout')
@extends('admin.menuAdmin')

@section('createAdmin')
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
</head>
<style>
  .uper {
    margin-top: 50px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Tambah Data Admin
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('admin.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="nama"/>
          </div>
          <div class="form-group">    
              <label for="name">No HP</label>
              <input type="text" class="form-control" name="nohp"/>
          </div>
          <div class="form-group">
              <label for="price">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="quantity">Password</label>
              <input type="text" class="form-control" name="password"/>
          </div>
          <div class="form-group">
              <label for="quantity">Status</label><br>
              <select id="status" name="status">
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
      <script type="text/javascript">
        $(document).ready(function() {
        $('#status').select2();
        });
      </script>
  </div>
</div>
@endsection
