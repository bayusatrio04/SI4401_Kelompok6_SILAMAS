
@extends('layouts.main')
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/SILAMAS.png') }}" />
@include('partials.navbar')
@section('content')

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
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Detail
                        </h1>
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
                <img class="sahpe" src="{{  asset('assets/img/shapes/shape.png') }}" alt="#">
                <img class="sahpe2" src="{{  asset('assets/img/shapes/shape.png') }}" alt="#">
                    <div class="px-5 p-5 ms-auto">
                            @foreach ($item->details as $aduan)
                            <main>
                                <div class="container py-4">
                                  <header class="pb-3 mb-4 border-bottom">
                                    @if(Session::has('error'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Tidak Punya akses</strong> .
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                                        <img src="{{ asset('assets/img/logo/SILAMAS.png') }}" class="shadow-lg rounded-pill" width="34" alt="">
                                      <span class="fw-bold fs-4 ml-3">Detail</span>
                                    </a>
                                  </header>

                                  <div class="p-3 mb-4 bg-light rounded-3 shadow">
                                    <div class="container-fluid py-5">
                                      <h1 class="display-5 fw-bold"># {{ $aduan->id }}</h1>
                                      <p class="col-md-8 fs-4 d-flex ">{{ auth()->user()->name }} <span class="">Test</span></p>
                                      <span class="badge text-bg-danger">{{ $aduan->user_nik }}</span>
                                    </div>
                                  </div>

                                  <div class="row align-items-md-stretch">
                                    <div class="col-md-6">
                                      <div class="h-100 p-5 text-bg-dark rounded-3 shadow">
                                        <h2 class="text-info opacity-50">Deskripsi</h2>
                                        <p>{{ $aduan->description }}</p>
                                        <button class="btn btn-outline-light" type="button">Example button</button>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="h-100 p-5 bg-light border rounded-3">
                                        <h2>Lampiran</h2>
                                        @php
                                            $data =  'assets/images/upload/'.$aduan->image ;
                                        @endphp
                                        @if ($aduan->image == True)
                                        <img src="{{ asset($data) }}" width="30%" alt="">
                                        @else
                                            <p class="text-danger bg-outline-danger">Tidak ada lampiran...</p>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="p-3 mb-4 bg-light rounded-3 mt-3 shadow">
                                        <div class="container-fluid py-2 d-flex justify-content-center">
                                            @if ($aduan->status == "Pending")
                                            <h1 class=" badge text-bg-danger fw-bold">{{ $aduan->status }}</h1>
                                            @elseif ($aduan->status == "Processing")
                                            <h1 class="badge text-bg-warning">{{ $aduan->status }}</h1>
                                            @elseif ($aduan->status == "Complete")
                                            <h1 class="badge text-bg-success">{{ $aduan->status }}</h1>
                                            @endif
                                        </div>
                                    </div>
                                  </div>

                                  <footer class="pt-3 mt-4 text-muted border-top">
                                    Created at <span class="badge text-bg-warning">{{ $aduan->created_at }} </span>
                                  </footer>
                                </div>
                                <div class="px-4 py-3 mb-2 flex bg-white rounded-lg shadow-md dark:text-gray-400   dark:bg-gray-800">
                                    <div class="text-center flex-1">
                                      <h1 class="mb-8 font-semibold">Tanggapan</h1>
                                      <p class="text-gray-800 dark:text-gray-400">

                                        @if (empty($tangap->tanggapan))
                                        Belum ada tanggapan
                                        @else
                                        {{ $tangap->tanggapan}}
                                        @endif
                                      </p>
                                    </div>
                                  </div>
                              </main>
                            @endforeach
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
