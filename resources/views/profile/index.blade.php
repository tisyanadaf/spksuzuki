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
              <p class="text-muted"> Tangguh </p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Jabatan </strong>
              <p class="text-muted">Kepala Cabang</p>
              <hr>
              <strong><i class="fa fa-envelope margin-r-5"></i> Username</strong>
              <p class="text-muted">tangguh</p>
              <hr>
              <strong><i class="fa fa-phone margin-r-5"></i> Tanggal Masuk</strong>
              <p>(123) 456-7890 </p>
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
                    <form class="form-horizontal form-material">
                      <div class="form-group">
                        <label class="col-md-12">Nama Lengkap</label>
                        <div class="col-md-12">
                          <input placeholder="Florence Douglas" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Divisi</label>
                        <div class="col-md-12">
                          <input placeholder="florencedouglas@admin.com" class="form-control form-control-line" name="example-email" id="example-email" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Jabatan</label>
                        <div class="col-md-12">
                          <input placeholder="florencedouglas@admin.com" class="form-control form-control-line" name="example-email" id="example-email" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Username</label>
                        <div class="col-md-12">
                          <input placeholder="florencedouglas@admin.com" class="form-control form-control-line" name="example-email" id="example-email" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                          <input value="password" class="form-control form-control-line" type="password">
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
    @include('penilaian.penilaian_js')
    @stop