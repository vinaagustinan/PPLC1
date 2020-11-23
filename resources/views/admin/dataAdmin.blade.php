@extends('admin.menu')
@section('dataAdmin')
<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Data Admin</h3>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>No HP</th>
                                <!-- <th>Email</th> -->
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_admin as $admin)
                            <tr class="tr-shadow">
                                <td>{{$admin->nama}}</td>
                                <td>{{$admin->no_hp}}</td>
                                <!-- <td>{{$admin->email}}</td> -->
                                <!-- <td>{{$admin->password}}</td> -->
                                <td>{{$admin->status}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="/admAdmin/{{$admin->id}}/detail">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Detail" href="/detail">
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