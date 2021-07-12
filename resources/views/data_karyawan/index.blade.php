@extends('index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Data Karyawan</h1>
    </div>
    <!-- Main content -->
    <div class="content">
        <h3 class="text-center text-black">PT. Dwi Perkasa Mobiltama Cibubur</h3>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('dashboard/input_data_karyawan') }}" type="button" class="btn btn-primary float-right m-2">Tambah Karyawan</a>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#all" role="tab"><span class="hidden-sm-up"><i class="fa fa-asterisk"></i></span> <span class="hidden-xs-down">Keseluruhan</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#penjualan" role="tab"><span class="hidden-sm-up"><i class="fa fa-money"></i></span> <span class="hidden-xs-down">Divisi Penjualan</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#service" role="tab"><span class="hidden-sm-up"><i class="fa fa-gear"></i></span> <span class="hidden-xs-down">Divisi Service</span></a> </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="all" role="tabpanel">
                                <div class="info-box m-t-1">
                                    <div class="table-responsive">
                                        <table id="tbl_all" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>NIK</th>
                                                    <th>NAMA</th>
                                                    <th>JABATAN</th>
                                                    <th>DIVISI</th>
                                                    <th>TANGGAL MASUK</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123456</td>
                                                    <td>Internet
                                                        Explorer 4.0
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td> 4</td>
                                                    <td>X</td>
                                                    <td>
                                                        <a href="{{ url('dashboard/ubah_data_karyawan') }}" type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a> |
                                                        <a href="{{ url('dashboard/hapus_data_karyawan') }}" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>    
                                                </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>NIK</th>
                                                    <th>NAMA</th>
                                                    <th>JABATAN</th>
                                                    <th>DIVISI</th>
                                                    <th>TANGGAL MASUK</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane  p-20" id="penjualan" role="tabpanel">
                                <div class="info-box m-t-1">
                                    <div class="table-responsive">
                                        <table id="tbl_penjualan" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                    <th>NIK</th>
                                                    <th>NAMA</th>
                                                    <th>JABATAN</th>
                                                    <th>DIVISI</th>
                                                    <th>TANGGAL MASUK</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123456</td>
                                                    <td>Internet
                                                        Explorer 4.0
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td> 4</td>
                                                    <td>X</td>
                                                    <td>
                                                        <a href="{{ url('dashboard/ubah_data_karyawan') }}" type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a> |
                                                        <a href="{{ url('dashboard/hapus_data_karyawan') }}" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>    
                                                </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>NIK</th>
                                                    <th>NAMA</th>
                                                    <th>JABATAN</th>
                                                    <th>DIVISI</th>
                                                    <th>TANGGAL MASUK</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-20" id="service" role="tabpanel">
                                <div class="info-box m-t-1">
                                    <div class="table-responsive">
                                        <table id="tbl_service" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                    <th>NIK</th>
                                                    <th>NAMA</th>
                                                    <th>JABATAN</th>
                                                    <th>DIVISI</th>
                                                    <th>TANGGAL MASUK</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123456</td>
                                                    <td>Internet
                                                        Explorer 4.0
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td> 4</td>
                                                    <td>X</td>
                                                    <td>
                                                        <a href="{{ url('dashboard/ubah_data_karyawan') }}" type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a> |
                                                        <a href="{{ url('dashboard/hapus_data_karyawan') }}" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>    
                                                </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>NIK</th>
                                                    <th>NAMA</th>
                                                    <th>JABATAN</th>
                                                    <th>DIVISI</th>
                                                    <th>TANGGAL MASUK</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
    @section('scriptJS')
    @include('data_karyawan.data_karyawan_js')
    @stop