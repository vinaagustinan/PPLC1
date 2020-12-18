@extends('petani.menu')
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
                <h3 class="title-5 m-b-35">Data Rendemen</h3>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No Antrian</th>
                                <th>Berat Tebu</th>
                                <th>Nilai Rendemen</th>
                                <th>Biaya</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_rendemen as $rendemen)
                            <tr class="tr-shadow">
                                <td>{{$rendemen->id_antrian}}</td>
                                <td>{{$rendemen->BeratTebu}}</td>
                                <td>{{$rendemen->rendemenSementara}}</td>
                                <td>Rp{{$rendemen->Biaya}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="/petaniRendemen/{{$rendemen->id}}/rincian" class="item" data-toggle="tooltip" data-placement="top" title="Rincian">
                                            <i class="zmdi zmdi-more"></i>
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