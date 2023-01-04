
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
                               <a href="/user"><img src="{{ asset('assets/img/logo/logo.png') }}" width="34" alt=""></a>
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
                                        <a href="/user" class="active" aria-label="Toggle navigation">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                            </svg>
                                            Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/statistik" aria-label="Toggle navigation">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line text-danger" viewBox="0 0 16 16">
                                                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                                              </svg>
                                            &nbsp;Statistik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('leaderboard') }}" aria-label="Toggle navigation">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-3 text-warning" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                                              </svg>
                                            &nbsp;Leaderboard</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <style>
                              .nav-item.dropdown{
                                list-style-type: none !important;
                              }
                            </style>
                            @auth
                            <span> <img class="object-cover rounded-pill" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ Auth::user()->name }}"
                                alt="" aria-hidden="true" width="42" height="42" /></span>
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle mx-3 bg-light text-primary p-2 rounded" href="#"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Hello, {{ auth()->user()->name }}
                                    </a>
                                    <li class="nav-item dropdown" style="list-style:none !improtant;">
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="list-style:none !improtant;">
                                            <li><a class="dropdown-item text-primary" href="{{ route('profile') }}"><i class="bi bi-gear-fill text-primary"></i> My Profile</a></li>
                                            <li><a class="dropdown-item text-primary" href="{{ route('dashboard') }}"><i class="bi bi-gear-fill text-primary"></i> Dashboards</a></li>

                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <form action="/logout" method="post">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item text-bg-danger"><i class="bi bi-box-arrow-right text-warning"></i> Logout</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                                    @else
                            <div class="col-md-3 text-end">
                                <a href="/login"><button type="button" class="btn btn-outline-danger me-2">Login</button></a>
                                <a href="/register"><button type="button" class="btn btn-outline-warning">Sign-up</button></a>
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

