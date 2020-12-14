@extends('petani.menu')
@section('dataRendemen')
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <h3 class="title-5 m-b-35">Input Data Rendemen</h3>
                    <form method="POST" action="tambahRendemen/createRendemen" class="col-md-6">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="NoAntrian">No Antrian</label>
                        <input type="text" class="form-control" id="NoAntrian" name="NoAntrian" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="BeratTebu">Berat Tebu (Kg)</label>
                        <input type="text" class="form-control" id="BeratTebu" name="BeratTebu" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="NPP">Nira</label>
                        <input type="text" class="form-control" id="NPP" name="NPP" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="KNT">Kadar Nira Tebu</label>
                        <input type="text" class="form-control" id="KNT" name="KNT" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="HPB">Hasil Peneraan Brix</label>
                        <input type="text" class="form-control" id="HPB" name="HPB" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="PSHK">Perbandingan Setara Harkat Kemurnian</label>
                        <input type="text" class="form-control" id="PSHK" name="PSHK" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="WR">Winter Rendemen</label>
                        <input type="text" class="form-control" id="WR" name="WR" required oninvalid="this.setCustomValidity('Form data rendemen harap diisi semua')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="hargaGiling">Harga Giling (/Kg)</label>
                        <input type="text" class="form-control" id="hargaGiling" name="hargaGiling">
                    </div>

                    <a href="/pabrikRendemen" type="button" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
@endsection