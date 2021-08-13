@extends('index')
@section('title')
<title>Hasil Penilaian</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <ol class="breadcrumb">
            <li class="sub-bread">Data Penilaian</li>
        </ol>
        <h1>Data Penilaian</h1>
    </div>
    <!-- Main content -->
    <div class="content">
        <h3 class="text-center text-black">PT. Dwi Perkasa Mobiltama Cibubur</h3>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if (Session::has('failed'))
                        <div class="alert alert-danger">
                            {{ Session::get('failed') }}
                        </div>
                        @endif
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
                                        @if (count($karyawan_hasil_penilaian) !== 0)
                                        @foreach ($karyawan_hasil_penilaian as $row)
                                        <tr>
                                            <td>{{ $row->nik }}</td>
                                            <td>{{ strtoupper($row->nama_lengkap) }}</td>
                                            <td>{{ strtoupper($row->jabatan) }}</td>
                                            <td>{{ strtoupper($row->divisi) }}</td>
                                            <td>{{ $row->tgl_masuk }}</td>
                                            <td>{{ $row->nilai_akhir }}</td>
                                            @switch($row->kesimpulan)
                                            @case("promosi")
                                            <td><span class="label label-success">{{ strtoupper($row->kesimpulan) }}</span></td>
                                            @break

                                            @case("mutasi")
                                            <td><span class="label label-primary">{{ strtoupper($row->kesimpulan) }}</span></td>
                                            @break

                                            @case("demosi")
                                            <td><span class="label label-info">{{ strtoupper($row->kesimpulan) }}</span></td>
                                            @break

                                            @case("training")
                                            <td><span class="label label-warning">{{ strtoupper($row->kesimpulan) }}</span></td>
                                            @break

                                            @case("phk")
                                            <td><span class="label label-danger">{{ strtoupper($row->kesimpulan) }}</span></td>
                                            @break

                                            @default
                                            <td><span class="label label-muted">{{ strtoupper($row->kesimpulan) }}</span></td>
                                            @endswitch
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
    <script>
        var menu_active = document.getElementById('hasil-penilaian');
        menu_active.classList.add('active');
    </script>
    @include('penilaian.penilaian_js')
    @stop