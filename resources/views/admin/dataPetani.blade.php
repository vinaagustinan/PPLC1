@extends('admin.menu')
@section('dataPetani')
<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Data Petani</h3>
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
                                <!-- <th>No KTP</th> -->
                                <th>Nama</th>
                                <th>No KTP</th>
                                <th>No HP</th>
                                <!-- <th>Alamat Lahan</th> -->
                                <!-- <th>Luas Lahan</th> -->
                                <!-- <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_petani as $petani)
                            <tr class="tr-shadow">
                                <td>{{$petani->nama}}</td>
                                <td>{{$petani->no_ktp}}</td>
                                <td>{{$petani->no_hp}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="/admPetani/{{$petani->id}}/edit">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-more"></i>
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
</section>
<!-- END DATA TABLE-->
@endsection