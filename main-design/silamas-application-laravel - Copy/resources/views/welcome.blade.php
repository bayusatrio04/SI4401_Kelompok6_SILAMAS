
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SILAMAS | {{ $title }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/SILAMAS.png" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">





    {{-- toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
</head>
<style>
    /* Preloader */
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999999999;
  width: 100%;
  height: 100%;
  background-color: #fff;
  overflow: hidden;
}

.preloader-inner {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.preloader-icon {
  width: 100px;
  height: 100px;
  display: inline-block;
  padding: 0px;
}

.preloader-icon span {
  position: absolute;
  display: inline-block;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  background: #0069ff;
  -webkit-animation: preloader-fx 1.6s linear infinite;
  animation: preloader-fx 1.6s linear infinite;
}

.preloader-icon span:last-child {
  animation-delay: -0.8s;
  -webkit-animation-delay: -0.8s;
}

@keyframes preloader-fx {
  0% {
    -webkit-transform: scale(0, 0);
            transform: scale(0, 0);
    opacity: 0.5;
  }
  100% {
    -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
    opacity: 0;
  }
}

@-webkit-keyframes preloader-fx {
  0% {
    -webkit-transform: scale(0, 0);
    opacity: 0.5;
  }
  100% {
    -webkit-transform: scale(1, 1);
    opacity: 0;
  }
}
</style>
<body>

    <style>
        .nav-item a {
       display: inline-block;
       text-decoration: none;
       transition: all 0.4s ease;
       -webkit-transition: all 0.4s ease;
       -moz-transition: all 0.4s ease;
     }
        </style>
        <!-- Start Header Area -->
         <header class="header navbar-area" >
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-lg-12">
                         <div class="nav-inner">
                             <!-- Start Navbar -->
                             <nav class="navbar navbar-expand-lg align-center" style="text-decoration:none;">
                                 <li class="nav-item text-white btn btn-light rounded-pill button ">
                                    <a href="/"><img src="../assets/img/logo/logo.png" width="34" alt=""></a>
                                     {{-- <a href="contact.html" aria-label="Toggle navigation">SILAMAS</a> --}}
                                 </li>
                                 <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                     aria-expanded="false" aria-label="Toggle navigation">
                                     <span class="toggler-icon"></span>
                                     <span class="toggler-icon"></span>
                                     <span class="toggler-icon"></span>
                                 </button>
                                 <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                     <ul id="nav" class="navbar-nav ms-auto">
                                         <li class="nav-item">
                                             <a href="/" class="active" aria-label="Toggle navigation">Home</a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="/statistik" aria-label="Toggle navigation">Statistik</a>
                                         </li>
                                         @auth

                                         <li class="nav-item">
                                             <a href="/myreport" aria-label="Toggle navigation">My Reports</a>
                                         </li>
                                         @endauth
                                     </ul>
                                 </div> <!-- navbar collapse -->
                                 <style>
                                   .nav-item.dropdown{
                                     list-style-type: none !important;
                                   }
                                 </style>
                                 @auth
                                 <div class="button" style="list-style:none !improtant;">
                                     <a class="nav-link dropdown-toggle ml-3 bg-light text-primary btn" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Hello, {{ auth()->user()->name }}
                                     </a>
                                     <li class="nav-item dropdown" style="list-style:none !improtant;">
                                             <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="list-style:none !improtant;">
                                               <li><a class="dropdown-item text-primary" href="/profile"><i class="bi bi-gear-fill text-primary"></i> My Profile</a></li>

                                               <li><hr class="dropdown-divider"></li>
                                               <li>
                                                   <form action="/logout" method="post">
                                                     @csrf
                                                       <button type="submit" class="dropdown-item text-warning"><i class="bi bi-box-arrow-right text-warning"></i> Logout</button>
                                                   </form>
                                               </li>
                                             </ul>
                                     </li>
                                 </div>
                                 @else
                                 <div class="col-md-3 text-end">
                                     <a href="{{ url('login') }}"><button type="button" class="btn btn-outline-info me-2">Login</button></a>
                                     <a href="{{ url('register') }}"><button type="button" class="btn btn-outline-warning">Sign-up</button></a>
                                 </div>
                                 @endauth
                             </nav>
                             <!-- End Navbar -->
                         </div>
                     </div>
                 </div> <!-- row -->
             </div> <!-- container -->
         </header>
         <!-- End Header Area -->

    <div class="content">
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <a class="navbar-brand" href="{{ url('/') }}">
                        </a>
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Tempatnya Untuk Melakukan Pengaduan Laporan Di Kelurahan Setempat.
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Silamas adalah aplikasi pengaduan masyarakat yang menampung aspirasi masyarakat secara online,
                            yang dapat memudahkan masyarakat untuk menyampaikan pengaduannya.</p>
                        <div class="button">
                            <a href="{{ route('login') }}" class="btn text-danger">Laporkan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->



    <!-- Start Info Search -->
    <section class="domain-search">
        <div class="container mb-3">
            <div class="inner-cotainer">
                <img class="sahpe" src="../assets/img/shapes/shape.png" alt="#">
                <img class="sahpe2" src="../assets/img/shapes/shape.png" alt="#">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="content">
                            <h2><span>Cari Laporan?</span>Cari Laporan Disini</h2>
                            <!-- Start Search Form -->
                            <form action="{{ url('search') }}" method="GET">
                                <div class="search-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="search-input">
                                                <input type="text" name="id" id="id"
                                                    placeholder="Cari Laporan (Masukkan ID anda)">
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-3 col-md-3 col-12">
                                            <div class="search-input">
                                                <label for="id"><i class="lni lni-chevron-down"></i></label>
                                                <select name="id" id="id">
                                                    <option value="none" selected>Lainnya</option>
                                                    <option value="none">Pengaduan</option>
                                                    <option value="none">Aspirasi</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="search-btn button">
                                                <button type="submit" class="btn">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- End Search Form --><hr class="mt-3 mb-3">
                            <h2 class="text-warning mt-5 mb-5"><span class="mt-10 text-danger">How to use?</span class="">Bagaimana Cara Melapor?</h2>
                            <img src="../assets/img/hero/howto.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Info Search -->

        @if(Session::has('success'))
        <div class='container-fluid d-flex justify-content-end' style='position:fixed;top:100px;right:0;'>
            <div class='toast mb-3 show' role='alert' aria-live='assertive' aria-atomic='true'>
            <div class='toast-header'>

                <svg class='placeholder col-1 rounded me-2 bg-warning' width='20' height='20' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='#7CFC00'></rect>
                </svg>

                <strong class='me-auto'>Alert !</strong>
                <small>Just now</small>
                <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
            </div>
            <div class='toast-body bg-light text-success'>
                {{ Session::get('success') }}
            </div>
            </div>
        </div>
    @endif
    @if(Session::has('error'))
    <div class='container-fluid d-flex justify-content-end' style='position:relative;top:0;right:0;'>
        <div class='toast mb-3 show' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header'>

            <svg class='placeholder col-1 rounded me-2 bg-danger' width='20' height='20' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='#7CFC00'></rect>
            </svg>

            <strong class='me-auto'>Alert !</strong>
            <small>Just now</small>
            <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body bg-light text-success'>
            {{ Session::get('error') }}
        </div>
        </div>
    </div>
    @endif
    {{-- Footer --}}
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-5">
          <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted mx-auto">&copy; 2022 KELOMPOK 5 WAD | By : Bayu Satrio Trilaksono</span>
          </div>

          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex mx-auto">
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook" width="24" height="24"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram" width="24" height="24"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-google" width="24" height="24"></i></a></li>
          </ul>
        </footer>
    {{-- End Footer --}}

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>
    </div>


    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script>
            (function () {
        //===== Prealoder

        window.onload = function () {
            window.setTimeout(fadeout, 500);
        }

        function fadeout() {
            document.querySelector('.preloader').style.opacity = '0';
            document.querySelector('.preloader').style.display = 'none';
        }


        // WOW active
        new WOW().init();


        /*=====================================
        Sticky
        ======================================= */
        window.onscroll = function () {
            var header_navbar = document.querySelector(".navbar-area");
            var sticky = header_navbar.offsetTop;

            var logo = document.querySelector('.navbar-brand img')
            if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
            logo.src = 'assets/images/logo/logo.svg';
            } else {
            header_navbar.classList.remove("sticky");
            logo.src = 'assets/images/logo/white-logo.svg';
            }

            // show or hide the back-top-top button
            var backToTo = document.querySelector(".scroll-top");
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                backToTo.style.display = "flex";
            } else {
                backToTo.style.display = "none";
            }
        };


        //===== mobile-menu-btn
        let navbarToggler = document.querySelector(".mobile-menu-btn");
        navbarToggler.addEventListener('click', function () {
            navbarToggler.classList.toggle("active");
        });


    })();
    </script>
        {{-- toastr js--}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>

    <!-- Bootstrap JavaScript -->
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
