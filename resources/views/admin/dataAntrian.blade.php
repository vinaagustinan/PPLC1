@extends('admin.menu')
@section('content')
<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <h3 class="title-5 m-b-35">Data Antrian</h3>
            <div class="table-data__tool">
                <!-- <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add item</button>
                </div> -->
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No Antrian</th>
                            <th>Nama Petani</th>
                            <th>Nama Pabrik</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Nopol Truk</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data_antrian as $antrian)
                        <tr class="tr-shadow">
                            <td>{{$antrian->id}}</td>
                            <td>{{$antrian->nama}}</td>
                            <td>{{$antrian->nama_pabrik}}</td>
                            <td>{{$antrian->tanggal}}</td>
                            <td>{{$antrian->jam}}</td>
                            <td>{{$antrian->nopol}}</td>
                            <td>
                            <!-- <div class="table-data-feature">
                                <a href="/pabrikAntrian/{{$antrian->id}}/edit" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                            </div> -->
                            </td>
                        </tr>
                    @endforeach
     
                    <!-- <a href="/inputAntrian" type="button" class="btn btn-primary">Tambah Antrian</a> -->
                    
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->
@endsection