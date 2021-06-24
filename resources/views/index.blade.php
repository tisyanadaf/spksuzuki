<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Pendukung Keputusan Suzuki</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <!-- v4.0.0-alpha.6 -->
    <link rel="stylesheet" href="{{asset ('dist/bootstrap/css/bootstrap.min.css')}}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset ('dist/css/style.css')}}">
    <link rel="stylesheet" href="{{asset ('dist/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('dist/css/et-line-font/et-line-font.css')}}">
    <link rel="stylesheet" href="{{asset ('dist/css/themify-icons/themify-icons.css')}}">

    <!-- Chartist CSS -->
    <link rel="stylesheet" href="{{asset ('dist/plugins/chartist-js/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset ('dist/plugins/chartist-js/chartist-init.css')}}">
    <link rel="stylesheet" href="{{asset ('dist/plugins/chartist-js/chartist-plugin-tooltip.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        @include('layouts.header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidemenu')
        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content -->
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">Version 1.2</div>
        Copyright © 2017 Yourdomian. All rights reserved.
    </footer>
    <!-- jQuery 3 -->
    <script src="{{asset ('dist/js/jquery.min.js')}}"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="{{asset ('dist/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- template -->
    <script src="{{asset ('dist/js/niche.js')}}"></script>
    @yield('scriptJS')

    <!-- Chartjs JavaScript -->
    <script src="{{asset ('dist/plugins/chartjs/chart.min.js')}}"></script>
    <script src="{{asset ('dist/plugins/chartjs/chart-int.js')}}"></script>

    <!-- Chartist JavaScript -->
    <script src="{{asset ('dist/plugins/chartist-js/chartist.min.js')}}"></script>
    <script src="{{asset ('dist/plugins/chartist-js/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset ('dist/plugins/functions/chartist-init.js')}}"></script>
</body>

</html>