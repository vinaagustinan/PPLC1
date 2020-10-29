@extends('admin.menu')
@section('dataAdmin')
<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Data Admin</h3>
                <!-- <div class="table-data__tool"> -->
                    <!-- <div class="table-data__tool-left">
                        <div class="rs-select2--light rs-select2--md">
                            <select class="js-select2" name="property">
                                <option selected="selected">All Properties</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <div class="rs-select2--light rs-select2--sm">
                            <select class="js-select2" name="time">
                                <option selected="selected">Today</option>
                                <option value="">3 Days</option>
                                <option value="">1 Week</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <button class="au-btn-filter">
                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                    </div> -->
                    <!-- <div class="table-data__tool-right">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <a href="/createAdmin"><i class="zmdi zmdi-plus"></i>Data Baru</a></button>
                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                            <select class="js-select2" name="type">
                                <option selected="selected">Export</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div> -->
                <!-- </div> -->
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <!-- <th>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </th> -->
                                <th>Nama</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_admin as $admin)
                            <tr>
                                <td>{{$admin->nama}}</td>
                                <td>{{$admin->no_hp}}</td>
                                <td>{{$admin->email}}</td>
                                <!-- <td>{{$admin->password}}</td> -->
                                <td>{{$admin->status}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                            <i class="zmdi zmdi-mail-send"></i>
                                        </button>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button> -->
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