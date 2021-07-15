@extends('index')
@section('title')
<title>Penilaian Kinerja</title>
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
                                            <th>Status</th>
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
                                            <td><a href="{{ url('dashboard/input_nilai') }}" type="button" class="btn btn-sm btn-warning">Nilai</a></td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>Nilai</a></td>
                                            <td>X</td>
                                            <td><span class="label label-success">Sudah dinilai</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Divisi</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Status</th>
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
    <script>
        var menu_active = document.getElementById('input-penilaian');
        menu_active.classList.add('active');
    </script>
    @include('penilaian.penilaian_js')
    @stop