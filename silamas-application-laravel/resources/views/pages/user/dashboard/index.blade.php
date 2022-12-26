
@extends('layouts.main')
@extends('partials.navbar')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
</head>
<style>
    .domain-search .inner-cotainer {
  background-color: rgb(255, 255, 255) !important;
  border-radius: 10px;
  border: 1px solid #eee;
  padding: 0px 0px !important;
  position: relative;
  text-align: unset !important;
  margin-top: -120px;
  z-index: 5;
  -webkit-box-shadow: 0px 10px 30px #0000000f;
          box-shadow: 0px 10px 30px #0000000f;
  overflow: hidden;

}
.hero-area {
  position: relative;
  background-color: #303136;
  padding: 280px 0 260px 0;
  z-index: 0;
  background-color: #1d1d1e !important;
  background-image: url("../img/hero/bg-host-3.png") !important;
  background-size: cover;
  background-position: center;
}
.card-1{

  border: none !important;
  border-radius: 10px !important;
  width: 100% !important;
  background-color: #fff !important;
}



</style>
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Dashboards
                        </h1>
                        <div class="container">
                            <div class="col-12 col-9">
                                <div class="row">
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                    <div class="stats-icon purple mb-2">
                                                        <i class="iconly-boldShow"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Laporan anda</h6>
                                                    @if($total > 0)
                                                    <h6 class="font-extrabold mb-0">{{ $total }}</h6>
                                                    @else
                                                    <h6 class="text-secondary mb-0">Kosong</h6>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                    <div class="stats-icon red mb-2">
                                                        <i class=""><i class="bi bi-patch-exclamation-fill"></i></i></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Pending</h6>
                                                    @if($pending > 0)
                                                    <h6 class="font-extrabold mb-0">{{ $pending }}</h6>
                                                    @else
                                                    <h6 class="text-secondary mb-0">Kosong</h6>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                    <div class="stats-icon green mb-2">
                                                       <i> <i class="bi bi-check"></i></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Processing</h6>
                                                    @if($process > 0)
                                                    <h6 class="font-extrabold mb-0">{{ $process }}</h6>
                                                    @else
                                                    <h6 class="text-secondary mb-0">Kosong</h6>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                    <div class="stats-icon green mb-2">
                                                        <i> <i class="bi bi-check-all"></i></i>
                                                     </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Complete</h6>
                                                    @if($completed > 0)
                                                    <h6 class="font-extrabold mb-0">{{ $completed }}</h6>
                                                    @else
                                                    <h6 class="text-secondary mb-0">Kosong</h6>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="col-6 col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-4 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                        <div class="stats-icon blue mb-2">
                                                            <i> <i class="bi bi-chat-square-text-fill"></i></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                        <h6 class="text-muted font-semibold">Feedbacks</h6>
                                                        @if($tanggapan > 0)
                                                        <h6 class="font-extrabold mb-0">{{ $tanggapan }}</h6>
                                                        @else
                                                        <h6 class="text-secondary mb-0">Kosong</h6>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Show -->
    <section class="domain-search">
        <div class="container mb-3">
            <div class="inner-cotainer">
                <img class="sahpe" src="../assets/img/shapes/shape.png" alt="#">
                <img class="sahpe2" src="../assets/img/shapes/shape.png" alt="#">
                    <div class="px-5 p-5 ms-auto">
                            @if(count($pengaduan) > 0)
                            @foreach ($pengaduan as $aduan)
                            <div class="card text-bg-dark">
                                <div class="card-header text-white d-flex">
                                  Laporan&nbsp;<span class="card-title text-danger">#{{ $aduan->id }}</span> <a href="{{ route('detail',$aduan->id) }}" class="ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg></a>
                                </div>
                                <div class="card-body">
                                  <p class="card-text text-muted">Type : <span class="badge text-bg-info"> {{ $aduan->type }}</p> </span>
                                  <span>Description : {{ $aduan->description }}</span>
                                  <p class="card-text text-muted">Status : <span class="badge text-bg-danger"> {{ $aduan->status }}</p> </span>
                                </div>
                            </div>
                            <div class="card text-bg-light mt-2">
                                <div class="card-header text-dark">
                                  Lampiran
                                </div>
                                <div class="card-body">
                                  <img src="../assets/images/upload/{{ $aduan->image }}" alt="">
                                </div>
                            </div>
                            @endforeach

                            @else
                               <td colspan="8" class="text-center"> Tidak ada laporan satupun. <a href="{{ route('laporans.index') }}">Lapor</a></td>
                            @endif
                    </div>
            </div>
        </div>
    </section>
    <!-- End Show  -->

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
