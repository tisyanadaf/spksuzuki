<!DOCTYPE html>
<html lang="en">
<head>

     <title>Sistem Penilaian Kinerja Karyawan</title>
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

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('dist/css2/templatemo-digital-trend.css')}}">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
              Sistem Penilaian Kinerja Karyawan
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="nav-link contact">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Kejujuranmu menentukan karir para karyawan</h1>

                                   <a href="{{ url('/login') }}" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Yuk, nilai kinerja karyawan!</a>
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="{{asset('dist/images/working-remotely.png')}}" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">Tujuan <strong>Sistem Penilaian Kinerja</strong> Karyawan</h2>

                              <p class="mb-0" data-aos="fade-up"> Penilaian kinerja karyawan berguna untuk mengetahui kinerja para karyawan terhadap tanggung jawab yang telah diberikan.
                              <br><br>Sistem ini dirancang untuk <strong>memudahkan</strong> para penilai (kepala cabang dan kepala divisi) untu melakukan penilaian.</p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                          <img src="{{asset('dist/images/pencapaian.png')}}" class="img-fluid" alt="office">
                        </div>
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