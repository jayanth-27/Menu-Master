@extends('layouts.app')

@section('content') 
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>About</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="assets/img/counts-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Designers of the Elite Entrepreneurship Future</h3>
              <p>
                {{ config('app.name', 'Max Tech Agencies') }} is a System that aims at uniting all students, business partners and corporations to interact together in business operations and management by providing advanced tools and features to all its users. This system involves experts in all areas of specialisation.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Team Players</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Service Delivery</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Comprehensive Management</span></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

     <!-- ======= Why Choose Us Section ======= -->
     <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Why Choose Us</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/why-us-bg.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Let's grow your business together</h3>
                    <h4 class="mb-3">Achieve your business goals</h4>
                    <p>Students succefully registered are given the privileges to add or remove products for sale, post content as well as buy/return the products purchased.
                      Business Owners have option to manage their business pages, manage advertisements and promotions and also manage their products to fit their desired aspirations.
                    </p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Everything all in one place</h3>
                    <h4 class="mb-3">Be your own manager.</h4>
                    <p>Chat features are activated to enable students and business managers to interact to create a condusive business environment. School admins moderate the posts and clubs to ensure that the platform achieves it required mandate.</p>
                  </div>
                </div><!-- End slide item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

   <!-- ======= Call To Action Section ======= -->
   <section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h3>Contact Center</h3>
          <p>Our contact team is always active to address the issues raised by the system users. <br> Be a voice of Change and make it happen</p>
          <a class="cta-btn" href="contact.html">Call To Action</a>
        </div>
      </div>

    </div>
  </section><!-- End Call To Action Section -->

  </main><!-- End #main -->
 @endsection 