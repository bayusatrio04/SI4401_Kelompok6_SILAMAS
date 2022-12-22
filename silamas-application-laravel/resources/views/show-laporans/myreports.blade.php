
@extends('layouts.main')
@extends('partials.navbar')
@section('content')
<head>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/logo/SILAMAS.png" />
</head>
<style>
    .domain-search .inner-cotainer {
  background-color: #fff;
  border-radius: 10px;
  border: 1px solid #eee;
  padding: 0px 0px !important;
  text-align: center;
  position: relative;
  margin-top: -120px;
  z-index: 5;
  -webkit-box-shadow: 0px 10px 30px #0000000f;
          box-shadow: 0px 10px 30px #0000000f;
  overflow: hidden;
}
</style>
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Laporan
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
            <div class="inner-cotainer d-flex justify-content-center">
                <img class="sahpe" src="../assets/images/shapes/shape.png" alt="#">
                <img class="sahpe2" src="../assets/images/shapes/shape.png" alt="#">
                    <div class="col-lg-8">
                        <div class="content">
                            <h2><span>My Reports</span>Laporan Anda</h2>
                            <!-- Start Search Form -->

                            <table class="table table-success table-striped">
                                <thead class="table-danger">
                                  <th>ID</th>
                                  <th>NIK</th>
                                  <th>NAMA</th>
                                  <th>IMAGE</th>
                                  <th>TYPE</th>
                                  <th>DESCRIPTION</th>
                                  <th>STATUS</th>
                                </thead>
                                <tbody>
                                    @if(count($pengaduan) > 0)
                                    @foreach ($pengaduan as $aduan)
                                    <tr class=>
                                        <td>{{ $aduan->id }}</td>
                                        <td>{{ $aduan->user_nik }}</td>
                                        <td>{{ $aduan->name }}</td>
                                        <td><img class=" h-32 w-35 " src="assets/images/upload/{{ $aduan->image }}" alt="" loading="lazy" /></td>
                                        <td>{{ $aduan->type }}</td>
                                        <td>{{ $aduan->description }}</td>
                                        @if($aduan->status == "Belum di Proses")
                                        <td>
                                            <span class="badge text-bg-danger">{{ $aduan->status }}</span>
                                        </td>
                                        @endif
                                        @if($aduan->status == "Sudah di Proses")
                                        <td>
                                            <span class="badge text-bg-success">{{ $aduan->status }}</span>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach

                                    @else
                                       <td colspan="8" class="text-center"> Tidak ada laporan satupun. <a href="{{ route('laporans.index') }}">Lapor</a></td>
                                    @endif
                                </tbody>
                              </table>

                        </div>
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
