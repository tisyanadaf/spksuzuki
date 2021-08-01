@extends('index')
@section('title')
<title>Rekap Penilaian</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <ol class="breadcrumb">
            <li><a href="{{ url('dashboard/penilaian') }}">Input Penilaian</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> Rekap Penilaian</li>
        </ol>
        <h1>Rekap Data Penilaian</h1>
    </div>
    <!-- Main content -->
    <div class="content">
        <h3 class="text-center text-black">PT. Dwi Perkasa Mobiltama Cibubur</h3>
        <div class="row justify-content-center">
            <div class="col col-6">
                <div class="card p-4">

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