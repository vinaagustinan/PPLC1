@extends('petani.menu')
@section('dataAntrian')
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
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Nama Pabrik</th>
                            <th>Nopol Truk</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr class="tr-shadow">
                   
                                <div class="table-data-feature">
                                    <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    
                    
                    </tbody>
                    <a href="/ambilAntrian" type="button" class="btn btn-primary">Ambil Antrian</a>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->
@endsection