@extends('layouts.app')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="width: 100%;
height: 100vh;
background: url('assets/img/hero-bg.jpg') top center;
background-size: cover;
position: relative;
padding: 0;">
  <div class="container position-relative text-center text-lg-start p-0" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-8">
        <h1>Welcome!</h1>
        <h2>Step into the world of flavor, ambiance, and exceptional service!</h2>

        <div class="btns">
          <a href="#contact" class="btn-book animated fadeInUp scrollto">FeedBack</a>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Hero -->
<main id="main">

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Why Us</h2>
        <p>About</p>
      </div>

      <div class="row">

        <div class="col-lg-12 " align="center">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <span>Menu Master</span>
            
            <p>Connect to different to Restaurants and have seamless Experience in Menu_Master!</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Why Us Section --> 

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Gallery</h2>
        <p>Restaurants Photos</p>
      </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-0">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>FeedBack</h2>
        <p>Send Us FeedBack</p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-12 mt-5 mt-lg-0" style="box-shadow: 2px 2px 4px white; padding:2%">
  
          {!! Form::open(['action' => 'App\Http\Controllers\MessageController@store', 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
          {{-- creating form elements --}}
          {{Form::text('name', '', ['class'=> 'form-control, font-bold, my-2 w-100 rounded', 'placeholder'=>'Name'])}}
          {{Form::text('message',  '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Feedback'])}}
          {{Form::submit('Send Feedback', ['class'=>'btn btn-primary my-2, w-50'])}}
          {!! Form::close() !!}
         </div>

      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

 

@endsection