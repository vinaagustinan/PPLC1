@extends('petani.menu')
@section('dataRendemen')
<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Data Rendemen</h3>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NoPol Truk</th>
                                <th>Tanggal</th>
                                <th>Nilai Rendemen</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_rendemen as $rendemen)
                            <tr>
                                <td>{{$rendemen->nama}}</td>
                                <td>{{$rendemen->no_hp}}</td>
                                <!-- <td>{{$petani->alamat}}</td> -->
                                <!-- <td>{{$petani->alamat_lahan}}</td> -->
                                <td>{{$petani->email}}</td>
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
</section>
<!-- END DATA TABLE-->
@endsection