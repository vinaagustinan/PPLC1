@extends('petani.menu')
@section('content')
<!-- DATA TABLE-->
<div class="row">
    <div class="col-md-12">
        <h3 class="title-5 m-b-35">Data Rendemen</h3>
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
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
<!-- END DATA TABLE-->
@endsection