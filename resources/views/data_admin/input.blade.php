@extends('index')
@section('title')
<title>Tambah Data Admin</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <ol class="breadcrumb">
            <li><a href="{{ url('dashboard/data_admin') }}">Data Admin</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> Tambah Data Admin</li>
        </ol>
        <h1>Form Data Admin</h1>
    </div>
    <!-- Main content -->
    <div class="content">
        <h3 class="text-center text-black">PT. Dwi Perkasa Mobiltama Cibubur</h3>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('dashboard/input_admin') }}" method="post" class="form-horizontal form-bordered">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">NIK</label>
                                    <div class="col-md-3">
                                        <input name="nik" placeholder="NIK" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Nama Karyawan</label>
                                    <div class="col-md-6">
                                        <input name="nama_lengkap" placeholder="Nama Karyawan" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Divisi</label>
                                    <div class="col-md-3">
                                        <select name="divisi" class="form-control custom-select">
                                            <option selected value="" disabled>Pilih Divisi</option>
                                            <option value="kepala cabang">Kepala Cabang</option>
                                            <option value="manager divisi">Manager Divisi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Jabatan</label>
                                    <div class="col-md-3">
                                        <input name="jabatan" placeholder="Jabatan" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Tanggal Masuk</label>
                                    <div class="col-md-3">
                                        <input name="tgl_masuk" class="form-control" placeholder="dd/mm/yyyy" type="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Username</label>
                                    <div class="col-md-3">
                                        <input name="username" class="form-control" placeholder="Username" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Password</label>
                                    <div class="col-md-3">
                                        <input name="password" class="form-control" placeholder="Password" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col offset-md-4">
                                    <button type="submit" class="btn btn-success m-2">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
    @section('scriptJS')
    @include('data_admin.data_admin_js')
    @stop