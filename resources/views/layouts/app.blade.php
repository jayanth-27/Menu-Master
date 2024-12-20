<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Restaurant') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
 --}}
    <!-- Scripts -->
   

   <!--main Styles -->
   <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
   {{-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> --}}

  {{--  <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
   {{-- vendor bootstrap styles --}}
   <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

   
</head>
<body style="background-color:#0c0b09">
    {{-- <div id="app"> --}}

    <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 1234 5678 90</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sun: 11AM - 23PM</span></i>
      </div>
    </div>
  </div>

       <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center" style="text-decoration: none">
        <h1 class="d-flex align-items-center">{{ config('app.name', 'Max Tech Agencies') }}</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
            <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./courtside">CourtSide</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./beachside">BeachSide</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./riverside">RiverSide</a>
          </li>
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

       <div class="" style="padding-top: 0%">
        <main class="">
            @include('inc.messages')
            @yield('content')
        </main>
       </div>

        <!-- ======= Footer ======= -->
 
  
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>

    <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 <!-- Scripts -->
 <script src="{{ asset('js/main0.js') }}" ></script>
 <script src="{{ asset('js/main.js') }}" ></script>

 <script src="{{ asset('vendor/aos/aos.js') }}" ></script>
 <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
 <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}" ></script>
 <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.j') }}" ></script>
 <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}" ></script>
 <script src="{{ asset('vendor/php-email-form/validate.js') }}" ></script>
</body>
</html>
