<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel='icon' href="{{asset('dist/img/favicon_suzuki.ico')}}" type='image/x-icon'>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

  <!-- v4.0.0-alpha.6 -->
  <link rel="stylesheet" href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
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
      <span class="logo-mini"><img style="height: auto; width: 90%;" src="{{asset('dist/img/suzuki-small.png')}}" alt=""></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img style="height: auto; width: 90%;" src="{{asset('dist/img/suzuki.svg')}}" alt=""></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar blue-bg navbar-static-top">
      <!-- Sidebar toggle button-->

    </nav>
  </header>
</head>

<body>
  <div class="content-header sty-one">
    <ol class="breadcrumb">
      <li><a href="{{ url('/') }}">Sistem Penilaian Kinerja</a></li>
      <li class="sub-bread"><i class="fa fa-angle-right"></i> Log in</li>
    </ol>
  </div>
  <br><br><br>
  <center>
    <div class="col-lg-4 m-b-3" height="100vh">
      <div class="card" align="center">
        <div class="card-body">
          <h3 class="login-box-msg">Log In</h3>
          <form action="{{ url('login') }}" method="post">
            {{csrf_field()}}
            @if (Session::has('error_login'))
            <div class="alert alert-danger">
              {{ Session::get('error_login') }}
            </div>
            @endif
            <div class="form-group has-feedback">
              <input type="text" autocomplete="off" class="form-control sty1" name="username" placeholder="User">
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control sty1" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
        </form>
      </div>
    </div>
    </div>
  </center>
  <footer class="main-footer" style="margin-left: 0;">
    <div class="pull-right hidden-xs">Version 1.2</div>
    Copyright © 2021 PT. Dwi Perkasa Mobiltama Cibubur
  </footer>
  <!-- jQuery 3 -->
  <script src="{{asset('dist/js/jquery.min.js')}}"></script>

  <!-- v4.0.0-alpha.6 -->
  <script src="{{asset('dist/bootstrap/js/bootstrap.min.js')}}"></script>

  <!-- template -->
  <script src="{{asset('dist/js/niche.js')}}"></script>
  @include('login.login_js')
</body>

</html>