@extends('admin.menu')
@section('content')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <h3 class="title-5 m-b-35">Rincian Data Rendemen</h3>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="NoAntrian">No Antrian</label>
                        <input type="text" class="form-control" id="NoAntrian" name="NoAntrian" value="{{$data_rendemen->NoAntrian}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal"  value="{{$data_rendemen->tanggal}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="BeratTebu">Berat Tebu (Kwintal)</label>
                        <input type="text" class="form-control" id="BeratTebu" name="BeratTebu"  value="{{$data_rendemen->BeratTebu}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="NPP">Nira Perahan Pertama</label>
                        <input type="text" class="form-control" id="NPP" name="NoAntrian" value="{{$data_rendemen->NPP}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="KNT">Kadar Nira Tebu</label>
                        <input type="text" class="form-control" id="KNT" name="NoAntrian" value="{{$data_rendemen->KNT}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="HPB">Hasil Peneraan Brix</label>
                        <input type="text" class="form-control" id="HPB" name="NoAntrian" value="{{$data_rendemen->HPB}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="PSHK">Perbandingan Setara Harkat Kemurnian</label>
                        <input type="text" class="form-control" id="PSHK" name="NoAntrian" value="{{$data_rendemen->PSHK}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="WR">Winter Rendemen</label>
                        <input type="text" class="form-control" id="WR" name="NoAntrian" value="{{$data_rendemen->WR}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="NilaiRendemen">Nilai Rendemen</label>
                        <input type="text" class="form-control" id="NilaiRendemen" name="NilaiRendemen"  value="{{$data_rendemen->NilaiRendemen}}" readonly>
                    </div>
                    <a href="/admRendemen" type="button" class="btn btn-secondary">Kembali</a>
                    </form>
            </div>
        </div>
    </div>
@endsection