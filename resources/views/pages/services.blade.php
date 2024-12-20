@extends('layouts.app')

@section('content')
    <div style="padding-top: 0%">
        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
              <div class="container position-relative d-flex flex-column align-items-center">
        
                <h2>Services</h2>
                <ol>
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li>Services</li>
                </ol>
        
              </div>
            </div><!-- End Breadcrumbs -->
        
           <!-- ======= Our Services Section ======= -->
           <section id="services-list" class="services-list">
            <div class="container" data-aos="fade-up">
        
              <div class="section-header">
                <h2>Our Services</h2>
        
              </div>
        
              <div class="row gy-5">
        
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
                  <div>
                    <h4 class="title"><a href="#" class="stretched-link">Product Management</a></h4>
                    <p class="description">Students registered in the platform have the priority to add/remove products for sale and buy/return products purchased.
                      Business Owners as well have the authority to manage their products which they offer.
                    </p>
                  </div>
                </div>
                <!-- End Service Item -->
        
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
                  <div>
                    <h4 class="title"><a href="#" class="stretched-link">Post Content</a></h4>
                    <p class="description">Students have the option to post contents such as journals, diaries and innovations of their interest. These business contents can be viewed and downloaded by other students. </p>
                  </div>
                </div><!-- End Service Item -->
        
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
                  <div>
                    <h4 class="title"><a href="#" class="stretched-link">Advertisement Promotions</a></h4>
                    <p class="description">Business Owners manage and regulate advertisements/promotions on their business pages. Students can see the businesses available on campus as well as see ads for the business on other pages. incase of any inquiry, students should chat with the business owners.</p>
                  </div>
                </div><!-- End Service Item -->
        
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
                  <div>
                    <h4 class="title"><a href="#" class="stretched-link">Clubs management</a></h4>
                    <p class="description">Students in their fullness can add/delete clubs and also join/leave as many clubs as possible in the school. Schools admins have the authority to moderate clubs in the system.</p>
                  </div>
                </div><!-- End Service Item -->
        
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                  <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
                  <div>
                    <h4 class="title"><a href="#" class="stretched-link">User Management</a></h4>
                    <p class="description">School admins are given the authority to manage students and business owners. Super admin can perform all the functions of the school admin and manage all users.</p>
                  </div>
                </div><!-- End Service Item -->
        
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                  <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
                  <div>
                    <h4 class="title"><a href="#" class="stretched-link">Admin Functionalities</a></h4>
                    <p class="description">The System have two admin: school and super admins. School admins see reports and insights, moderate clubs and posts, and manage students and business owners. Super admin can perform all the Functionalities of the school admin together with managing and responding to queries.</p>
                  </div>
                </div><!-- End Service Item -->
        
              </div>
        
            </div>
          </section><!-- End Our Services Section -->
        
            
        
            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
              <div class="container" data-aos="fade-up">
        
                <div class="section-header">
                  <h2>Testimonials</h2>
                  <p>Happy clients have a testimony to tell. We deliver services of customer's satisfaction</p>
                </div>
        
                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                  <div class="swiper-wrapper">
        
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          I had some issues with my bussiness account. I thank your customer care service team for immediate support.
                        </p>
                        <div class="profile mt-auto">
                          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                          <h3>John mark</h3>
                          <h4>Business Owner</h4>
                        </div>
                      </div>
                    </div><!-- End testimonial item -->
        
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          Wow! Your system is worth  five star rating. It's easy and effective to use.
                          
                        </p>
                        <div class="profile mt-auto">
                          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                          <h3>Serena Williams</h3>
                          <h4>Student</h4>
                        </div>
                      </div>
                    </div><!-- End testimonial item -->
        
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          Nice site. All Functionalities in one place. I recommend everyone to use this system!
                        </p>
                        <div class="profile mt-auto">
                          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                          <h3>Queen Monique</h3>
                          <h4>Store Owner</h4>
                        </div>
                      </div>
                    </div><!-- End testimonial item -->
        
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
        
              </div>
            </section><!-- End Testimonials Section -->
        
          </main><!-- End #main -->
</div>
@endsection