@extends('index')
@section('title')
<title>Profile</title>
@stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <ol class="breadcrumb">
            <li class="sub-bread">Profile</li>
        </ol>
        <h1>Profile</h1>
    </div>
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-4">
          <div class="info-box">
            <div class="box-body"> <strong><i class="fa fa-book margin-r-5"></i> Nama</strong>
              <p class="text-muted" value="{{$karyawan[0]->nama_lengkap}}"></p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Jabatan </strong>
              <p class="text-muted" value="{{$karyawan[0]->jabatan}}"></p>
              <hr>
              <strong><i class="fa fa-envelope margin-r-5"></i> Username</strong>
              <p class="text-muted" value="{{$karyawan[0]->username}}"></p>
              <hr>
              <strong><i class="fa fa-phone margin-r-5"></i> Tanggal Masuk</strong>
              <p value="{{$karyawan[0]->tgl_masuk}}"></p>
              <hr>
            </div>
            <!-- /.box-body --> 
          </div>
        </div>
        <div class="col-lg-8">
          <div class="info-box">
            <div class="card tab-style1"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
              </ul>
              <!-- Tab panes -->
                <div class="tab-pane" id="settings" role="tabpanel">
                  <div class="card-body">
                  <form action='{{ url("dashboard/profile/$id") }}' method="post" class="form-horizontal form-bordered">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                        <input name="nik" value="{{$karyawan[0]->nik}}" placeholder="NIK" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Nama Lengkap</label>
                        <div class="col-md-12">
                          <input name="nama_lengkap" value="{{$karyawan[0]->nama_lengkap}}" placeholder="Nama Karyawan" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Divisi</label>
                        <div class="col-md-12">
                        <select name="divisi" value="{{$karyawan[0]->divisi}}" class="form-control custom-select">
                            <option value="" disabled>Pilih Divisi</option>
                            <option value="penjualan" @if($karyawan[0]->divisi === 'penjualan') selected @endif>Penjualan</option>
                            <option value="service" @if($karyawan[0]->divisi === 'service') selected @endif>Service</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Jabatan</label>
                        <div class="col-md-12">
                        <input name="jabatan" value="{{$karyawan[0]->jabatan}}" placeholder="Jabatan" class="form-control" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Username</label>
                        <div class="col-md-12">
                        <input name="username" value="{{$karyawan[0]->username}}" placeholder="Jabatan" class="form-control" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <button class="btn btn-success">Update Profile</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main row --> 
    </div>
    <!-- /.content --> 
  </div>

    @stop
    @section('scriptJS')
    @include('profile.profile_js')
    @stop