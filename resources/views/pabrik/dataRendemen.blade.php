@extends('petani.menu')
@section('dataRendemen')
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
                <h3 class="title-5 m-b-35">Data Rendemen</h3>
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
                                <th>Tanggal</th>
                                <th>Nilai Rendemen</th>
                                <th>Berat Tebu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_Rendemen as $rendemen)
                            <tr class="tr-shadow">
                                <td>{{$rendemen->NoAntrian}}</td>
                                <td>{{$rendemen->tanggal}}</td>
                                <td>{{$rendemen->NilaiRendemen}}</td>
                                <td>{{$rendemen->BeratTebu}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="/rincianrendemen/{{$rendemen->id}}/rincian" class="item" data-toggle="tooltip" data-placement="top" title="Rincian">
                                            <i class="zmdi zmdi-more"></i>
                                        </a>
                                        <a href="/pabrikRendemen/{{$rendemen->id}}/edit" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <a href="/tambahRendemen" type="button" class="btn btn-primary">Tambah</a>
                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->
@endsection