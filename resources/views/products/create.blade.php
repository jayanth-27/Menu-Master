<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
 --}}
    <!-- Scripts -->
   

   <!--main Styles -->
  {{--  <link href="{{ asset('css/main.css') }}" rel="stylesheet"> --}}
   <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  {{--  <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
   {{-- vendor bootstrap styles --}}
   <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/.js') }}" ></script>
</head>
<body class="page-index">
    {{-- <div id="app"> --}}
       <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center " style="margin-bottom:3%">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('/home') }}" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block"> {{ config('app.name', 'Max Tech Agencies') }}</span>
      </a>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
              <span>Client</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


       <div class="" style="padding-top: 0%">
        <main class="">
            @include('inc.messages')
            
            <div class="pagetitle">
                <h1>Create New Menu Item</h1>
                <nav>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./home">Home</a></li>
                    <li class="breadcrumb-item active">New Menu item</li>
                  </ol>
                </nav>
              </div><!-- End Page Title -->
          
              <section class="section dashboard">
                  <div class="row">
            
                    <!-- Left side columns -->
                    <div class="col-lg-12">
                      <div class="row container">
            
                       
                        <!-- Recent Sales -->
                        <div class="col-12">
                          <div class="card recent-sales overflow-auto">
            
                            <div class="filter">
                              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                  <h6>Filter</h6>
                                </li>
            
                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary mb-3"><a href="./" style="text-decoration:none; color:white; margin-bottom:2%"><span><</span>Back</a></button>
                              </div>
                            <div class="card-body">
                              <h5 class="card-title">Create Menu Item</h5>
                              
                              <div>
                                  {!! Form::open(['action' => 'App\Http\Controllers\ProductController@store', 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
                                  {{-- creating form elements --}}
                                  <div class="form-group">
                                    {{Form::label('name', 'Menu Item Name')}}
                                    {{Form::text('name', '', ['class'=> 'form-control', 'placeholder'=>'e.g Lobster Bisque'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('price', 'Price')}}
                                    {{Form::text('price', '', ['class'=> 'form-control', 'placeholder'=>'200'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('description', 'Product Description')}}
                                    {{Form::textarea('description', '', ['class'=> 'form-control', 'placeholder'=>'all the ingridients'])}}
                                  </div><br>
                                  <div class="form-group">
                                    {{Form::label('product_image', 'Product Image : ')}}
                                    {{Form::file('product_image')}}
                                  </div>                                  
                                  {{Form::submit('Submit', ['class'=>'btn btn-primary mt-2'])}}
                                  {!! Form::close() !!}
                              </div>
            
                            </div>
            
                          </div>
                        </div><!-- End Recent Sales -->
            
                        
                      </div>
                    </div><!-- End Left side columns -->
            
                    
            
                  </div>
                </section>
        </main>
       </div>

     
  
        </div>
      </div>
    </div>
  
    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>{{ config('app.name', 'Max Tech Agencies') }}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">{{ config('app.name', 'Max Tech Agencies') }}</a>
        </div>
      </div>
    </div>
  
  </footer>
  <!-- End Footer -->
  
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
  <script src="assets/js/main1.js"></script>
 <!-- Scripts -->
 <script src="{{ asset('js/main1.js') }}" ></script>
 <script src="{{ asset('js/main.js') }}" ></script>
 <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
 <script src="{{ asset('vendor/aos/aos.js') }}" ></script>
 <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}" ></script>
 <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}" ></script>
 <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.j') }}" ></script>
 <script src="{{ asset('vendor/php-email-form/validate.js') }}" ></script>
</body>
</html>
