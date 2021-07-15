@extends('index')
@section('title')
<title>Hasil Penilaian</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Data Penilaian</h1>
    </div>
    <!-- Main content -->
    <div class="content">
        <h3 class="text-center text-black">PT. Dwi Perkasa Mobiltama Cibubur</h3>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <a href="{{ url('dashboard/input_data_karyawan') }}" type="button" class="btn btn-warning float-right m-2"><i class="fa fa-download"></i> Unduh</a>
                        <div class="info-box m-t-1">
                            <div class="table-responsive">
                                <table id="tbl_hasil" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Divisi</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Hasil</th>
                                            <th>Kesimpulan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>Nilai</a></td>
                                            <td>X</td>
                                            <td>x</td>
                                            <td>X</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Divisi</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Hasil</th>
                                            <th>Kesimpulan</th>
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
    @stop
    @section('scriptJS')
    @include('penilaian.penilaian_js')
    @stop