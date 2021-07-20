<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Penilaian Kinerja Karyawan </title>
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
    <link rel='icon' href="{{asset('dist/img/favicon_suzuki.ico')}}" type='image/x-icon'>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <!-- v4.0.0-alpha.6 -->
    <link rel="stylesheet" href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/landing.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/et-line-font/et-line-font.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/themify-icons/themify-icons.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo blue-bg">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img style="height: auto; width: 90%;" src="{{asset('dist/img/suzuki-small.png')}}"
                    alt=""></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img style="height: auto; width: 90%;" src="{{asset('dist/img/suzuki.svg')}}"
                    alt=""></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar blue-bg navbar-static-top">
            <br>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <a href="{{ url('/login') }}" type="button" class="btn btn-nor btn-warning">Log In</button></a>
                </ul>
            </div>
        </nav>
    </header>
</head>

<body>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('dist/img/logo-dpm.png')}}" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="{{asset('dist/img/suzuki_cibubur.jpg')}}" alt="Chicago" width="1100" height="100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('dist/img/suzuki_cibubur.jpg')}}" alt="New York" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="col-lg-12 m-t-6">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-warning">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info-box">
                            <h5 class="m-b-2 text-black">CARA MELAKUKAN PENILAIAN</h5>
                            <div class="sl-item sl-primary">
                                <div class="sl-content"><small class="text-muted"><i
                                            class="fa fa-check-circle position-left"></i> Langkah 1</small>
                                    <p>
                                        Kepala cabang atau kepala divisi melakukan Log In sesuai dengan username dan
                                        password yang sudah terdaftar.
                                    </p>
                                </div>
                            </div>
                            <div class="sl-item sl-success">
                                <div class="sl-content"><small class="text-muted"><i
                                            class="fa fa-check-circle position-left"></i> Langkah 2</small>
                                    <p>
                                        Setelah berhasil Log In, pilih menu "Input Penilaian".
                                    </p>
                                </div>
                            </div>
                            <div class="sl-item sl-danger">
                                <div class="sl-content"><small class="text-muted"><i
                                            class="fa fa-check-circle position-left"></i> Langkah 3</small>
                                    <p>
                                        Klik tombol "Nilai" pada nama karyawan yang ingin dinilai.
                                    </p>
                                </div>
                            </div>
                            <div class="sl-item sl-success">
                                <div class="sl-content"><small class="text-muted"><i
                                            class="fa fa-check-circle position-left"></i> Langkah 4</small>
                                    <p>
                                        Isi form penilaian sesuai dengan kinerja karyawan tersebut berdasarkan kriteria
                                        yang sudah ditentukan.
                                    </p>
                                </div>
                            </div>
                            <div class="sl-item sl-warning">
                                <div class="sl-content"><small class="text-muted"><i
                                            class="fa fa-check-circle position-left"></i> Langkah 5</small>
                                    <p>
                                        Klik tombol "Proses" untuk melakukan proses penilaian dan klik tombol "Submit"
                                        untuk menyimpan nilai tersebut.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">Version 1.2</div>
        Copyright © 2021 PT. Dwi Perkasa Mobiltama Cibubur
    </footer>
    <!-- jQuery 3 -->
    <script src="{{asset('dist/js/jquery.min.js')}}"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="{{asset('dist/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- template -->
    <script src="{{asset('dist/js/niche.js')}}"></script>
</body>

</html>