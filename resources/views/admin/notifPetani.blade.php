@extends('admin.menu')
@section('notifPetani')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Data Pengajuan Akun Petani</h3>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <!-- <th>Alamat</th> -->
                                <th>No HP</th>
                                <th>Status</th>
                            </tr> 
                        </thead>
                        <tbody>
                        @foreach($data_petani as $petani)
                            <tr>
                                <td>{{$petani->nama}}</td>
                                <!-- <td>{{$petani->alamat}}</td> -->
                                <td>{{$petani->no_hp}}</td>
                                <td>{{$petani->status}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="/admPetani/{{$petani->id}}/edit">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                        </a> 
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section><br><br><br>

@endsection