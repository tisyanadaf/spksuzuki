<!DOCTYPE html>
<html lang="en">
<head>

     <title>Login</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel='icon' href="{{asset('dist/img/favicon_suzuki.ico')}}" type='image/x-icon'>
     <link rel="stylesheet" href="{{asset('dist/css2/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css2/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css2/aos.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css2/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css2/owl.theme.default.min.css')}}">

     <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css/font-awesome/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css/et-line-font/et-line-font.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css/themify-icons/themify-icons.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('dist/css2/templatemo-digital-trend.css')}}">


</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
              Sistem Penilaian Kinerja Karyawan
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>


     <!-- CONTACT -->
     <section class="contact section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4">Silahkan Login untuk <strong>menilai kinerja</strong></h1>

                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    
                    <center>
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
                    </div>

               </div>
          </div>
     </section>

     <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">PT. Dwi Perkasa Mobiltama <strong>Cibubur.</strong></h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Kontak Kami</h4>

            <p class="mb-1">
              +62 21 84301921
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Kantor</h4>

            <p class="mb-1">
              Trans Yogie, Jl. Alternatif Cibubur Jl. Raya Kranggan No.6, RT.001/RW.001, Nagrak, Kec. Jatisampurna, Kota Bks, Jawa Barat 17433, Indonesia
            </p>
          </div>
            <p class="copyright-text">Copyright © 2021 PT. Dwi Perkasa Mobiltama Cibubur
            <br>
            <a rel="nofollow noopener">Version 1.2</a></p>
          </div>
        </div>
      </div>
    </footer>


    <!-- SCRIPTS -->
     <script src="{{asset('dist/js2/jquery.min.js')}}"></script>
     <script src="{{asset('dist/js2/bootstrap.min.js')}}"></script>
     <script src="{{asset('dist/js2/aos.js')}}"></script>
     <script src="{{asset('dist/js2/owl.carousel.min.js')}}"></script>
     <script src="{{asset('dist/js2/smoothscroll.js')}}"></script>>
     <script src="{{asset('dist/js2/custom.js')}}"></script>

</body>
</html>