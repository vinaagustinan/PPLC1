@extends('admin.menu')
@section('content')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <h3 class="title-5 m-b-35">Rincian Data Rendemen</h3>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="id_antrian">No Antrian</label>
                        <input type="text" class="form-control" id="id_antrian" name="id_antrian" value="{{$data_rendemen->id_antrian}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="BeratTebu">Berat Tebu (Kwintal)</label>
                        <input type="text" class="form-control" id="BeratTebu" name="BeratTebu"  value="{{$data_rendemen->BeratTebu}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="NPP">Nira Perahan Pertama</label>
                        <input type="text" class="form-control" id="NPP" name="id_antrian" value="{{$data_rendemen->NPP}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="KNT">Kadar Nira Tebu</label>
                        <input type="text" class="form-control" id="KNT" name="id_antrian" value="{{$data_rendemen->KNT}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="HPB">Hasil Peneraan Brix</label>
                        <input type="text" class="form-control" id="HPB" name="id_antrian" value="{{$data_rendemen->HPB}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="PSHK">Perbandingan Setara Harkat Kemurnian</label>
                        <input type="text" class="form-control" id="PSHK" name="id_antrian" value="{{$data_rendemen->PSHK}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="WR">Winter Rendemen</label>
                        <input type="text" class="form-control" id="WR" name="id_antrian" value="{{$data_rendemen->WR}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="rendemenSementara">Nilai Rendemen</label>
                        <input type="text" class="form-control" id="rendemenSementara" name="rendemenSementara"  value="{{$data_rendemen->rendemenSementara}}" readonly>
                    </div>
                    <a href="/admRendemen" type="button" class="btn btn-secondary">Kembali</a>
                    </form>
            </div>
        </div>
    </div>
@endsection