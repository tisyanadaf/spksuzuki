@extends('index')
@section('title')
<title>Sistem Penilaian Kinerja Suzuki</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Dashboard</h1>
    </div>

    <!-- Main content -->
    <div class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="info-box">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="text-black">Karyawan Divisi Penjualan</h4>
                        </div>
                    </div>
                    <div class="m-t-2">
                        <canvas id="pie-chart-penjualan" height="210"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info-box">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="text-black">Karyawan Divisi service</h4>
                        </div>
                    </div>
                    <div class="m-t-2">
                        <canvas id="pie-chart-service" height="210"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="info-box bg-darkblue"> <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
                    <div class="info-box-content">
                        <h6 class="info-box-text text-white">Karyawan Sudah Dinilai</h6>
                        <h1 class="text-white">1,150</h1>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green text-white"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile"></i></span>
                    <div class="info-box-content">
                        <h6 class="info-box-text text-white">Karyawan Belum Dinilai</h6>
                        <h1 class="text-white">565</h1>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
@stop
@section('scriptJS')
@include('dashboard.dashboard_js')
@stop