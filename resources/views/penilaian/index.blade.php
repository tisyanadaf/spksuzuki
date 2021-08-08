@extends('index')
@section('title')
<title>Penilaian Kinerja</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <ol class="breadcrumb">
            <li class="sub-bread">Input Penilaian</li>
        </ol>
        <h1>Input Penilaian</h1>
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
                                        @if (count($karyawan) !== 0)
                                        @foreach ($karyawan as $row)
                                        <tr>
                                            <td>{{ $row->nik }}</td>
                                            <td>{{ strtoupper($row->nama_lengkap) }}</td>
                                            <td>{{ strtoupper($row->jabatan) }}</td>
                                            <td>{{ strtoupper($row->divisi) }}</td>
                                            <td>{{ $row->tgl_masuk }}</td>
                                            <td>
                                                @if ($row->id_karyawan != null)
                                                <a href='{{ url("dashboard/rekap_nilai/$row->id") }}' type="button" class="btn btn-sm btn-success">Lihat Nilai</a>
                                                @else
                                                <a href='{{ url("dashboard/input_nilai/$row->id") }}' type="button" class="btn btn-sm btn-info">Nilai</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="6" align="center">No Data</td>
                                        </tr>
                                        @endif
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