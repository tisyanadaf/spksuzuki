@extends('index')
@section('title')
<title>Data Karyawan</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <ol class="breadcrumb">
            <li class="sub-bread">Data Karyawan</li>
        </ol>
        <h1>Data Karyawan</h1>
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
                        <a href="{{ url('dashboard/input_karyawan') }}" type="button" class="btn btn-primary float-right m-2">Tambah Karyawan</a>
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
                                                @if (count($all_karyawan) !== 0)
                                                @foreach ($all_karyawan as $row)
                                                <tr>
                                                    <td>{{ $row->nik }}</td>
                                                    <td>{{ strtoupper($row->nama_lengkap) }}</td>
                                                    <td>{{ strtoupper($row->jabatan) }}</td>
                                                    <td>{{ strtoupper($row->divisi) }}</td>
                                                    <td>{{ $row->tgl_masuk }}</td>
                                                    <td>
                                                        <a href='{{ url("dashboard/ubah_karyawan/$row->id") }}' type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a> |
                                                        <a href='{{ url("dashboard/hapus_karyawan/$row->id") }}'' type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr><td colspan="6" align="center">No Data</td></tr>
                                                @endif
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
                                                @if (count($penjualan) !== 0)
                                                @foreach ($penjualan as $row)
                                                <tr>
                                                    <td>{{ $row->nik }}</td>
                                                    <td>{{ strtoupper($row->nama_lengkap) }}</td>
                                                    <td>{{ strtoupper($row->jabatan) }}</td>
                                                    <td>{{ strtoupper($row->divisi) }}</td>
                                                    <td>{{ $row->tgl_masuk }}</td>
                                                    <td>
                                                        <a href=' {{ url("dashboard/ubah_karyawan/$row->id") }}' type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a> |
                                                        <a href='{{ url("dashboard/hapus_karyawan/$row->id") }}'' type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr><td colspan="6" align="center">No Data</td></tr>
                                                @endif
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
                                                @if (count($service) !== 0)
                                                @foreach ($service as $row)
                                                <tr>
                                                    <td>{{ $row->nik }}</td>
                                                    <td>{{ strtoupper($row->nama_lengkap) }}</td>
                                                    <td>{{ strtoupper($row->jabatan) }}</td>
                                                    <td>{{ strtoupper($row->divisi) }}</td>
                                                    <td>{{ $row->tgl_masuk }}</td>
                                                    <td>
                                                        <a href='{{ url("dashboard/ubah_karyawan/$row->id") }}' type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a> |
                                                        <a href='{{ url("dashboard/hapus_karyawan/$row->id") }}'' type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr><td colspan="6" align="center">No Data</td></tr>
                                                @endif
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
</div>
@stop
@section('scriptJS')
@include('data_karyawan.data_karyawan_js')
@stop