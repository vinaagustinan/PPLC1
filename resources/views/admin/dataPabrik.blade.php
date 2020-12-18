@extends('admin.menu')
@section('dataPabrik')
<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Data Pabrik</h3>
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
                                <th>Nama Pabrik</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <!-- <th>Email</th> -->
                                <!-- <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_pabrik as $pabrik)
                            <tr class="tr-shadow">
                                <td>{{$pabrik->nama_pabrik}}</td>
                                <td>{{$pabrik->alamat}}</td>
                                <td>{{$pabrik->no_hp}}</td>
                                <!-- <td>{{$pabrik->status}}</td> -->
                                <td>
                                    <div class="table-data-feature">
                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                            <i class="zmdi zmdi-mail-send"></i>
                                        </button> -->
                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button> -->
                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button> -->
                                        <a href="/admPabrik/{{$pabrik->id}}/edit">
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