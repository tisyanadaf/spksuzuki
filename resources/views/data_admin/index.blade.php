@extends('index')
@section('title')
<title>Data Admin </title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <ol class="breadcrumb">
            <li class="sub-bread">Kelola Data Admin</li>
        </ol>
        <h1>Kelola Data Admin</h1>
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
                    <a href="{{ url('dashboard/input_admin') }}" type="button" class="btn btn-primary float-right m-2">Tambah Data Admin</a>
                        <div class="info-box m-t-1">
                            <div class="table-responsive">
                                <table id="tbl_all_admin" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Divisi</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($all_admin) !== 0)
                                        @foreach ($all_admin as $row)
                                        <tr>
                                            <td>{{ $row->nik }}</td>
                                            <td>{{ strtoupper($row->nama_lengkap) }}</td>
                                            <td>{{ strtoupper($row->jabatan) }}</td>
                                            <td>{{ strtoupper($row->divisi) }}</td>
                                            <td>{{ $row->tgl_masuk }}</td>
                                            <td>{{ $row->username }}</td>
                                            <td>
                                                <a href='{{ url("dashboard/ubah_admin/$row->id") }}' type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a> |
                                                <a href='{{ url("dashboard/hapus_admin/$row->id") }}'' type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
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
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Divisi</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Username</th>
                                            <th>Action</th>
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
    @include('data_admin.data_admin_js')
    @stop