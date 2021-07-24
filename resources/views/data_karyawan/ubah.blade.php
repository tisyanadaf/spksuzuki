@extends('index')
@section('title')
<title>Ubah Data Karyawan</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <ol class="breadcrumb">
            <li><a href="{{ url('dashboard/data_karyawan') }}">Data Karyawan</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> Ubah Data Karyawan</li>
        </ol>
        <h1>Ubah Data Karyawan</h1>
    </div>
    <!-- Main content -->
    <div class="content">
        <h3 class="text-center text-black">PT. Dwi Perkasa Mobiltama Cibubur</h3>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action='{{ url("dashboard/ubah_karyawan/$id") }}' method="post" class="form-horizontal form-bordered">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">NIK</label>
                                    <div class="col-md-3">
                                        <input name="nik" value="{{$karyawan[0]->nik}}" placeholder="NIK" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Nama Karyawan</label>
                                    <div class="col-md-6">
                                        <input name="nama_lengkap" value="{{$karyawan[0]->nama_lengkap}}" placeholder="Nama Karyawan" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Divisi</label>
                                    <div class="col-md-3">
                                        <select name="divisi" value="{{$karyawan[0]->divisi}}" class="form-control custom-select">
                                            <option value="" disabled>Pilih Divisi</option>
                                            <option value="penjualan" @if($karyawan[0]->divisi === 'penjualan') selected @endif>Penjualan</option>
                                            <option value="service" @if($karyawan[0]->divisi === 'service') selected @endif>Service</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Jabatan</label>
                                    <div class="col-md-3">
                                        <input name="jabatan" value="{{$karyawan[0]->jabatan}}" placeholder="Jabatan" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Tanggal Masuk</label>
                                    <div class="col-md-3">
                                        <input name="tgl_masuk" value="{{$karyawan[0]->tgl_masuk}}" class="form-control" placeholder="dd/mm/yyyy" type="date">
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
    @include('data_karyawan.data_karyawan_js')
    @stop