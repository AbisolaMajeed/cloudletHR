  <!-- ======= Header ======= -->
  @extends('layouts.master')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @section('content')
      <section class="hero-section align-items-center" id="hero" data-aos="fade-right">

          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 hero-text-image">
                      <div class="row align-items-end justify-content-between">
                          <div class="col-lg-7 text-center text-lg-start index-text">

                              <h1 data-aos="fade-right" class="index">The <span class="typing" id="typing">Ideal</span> HR
                                  Software<br> To Manage Your<br> Workforce</h1>
                              <p class="mb-4" data-aos="fade-right" data-aos-delay="100">Manage all your HR administrative
                                  actions from one central location and eliminate <br> errors due to manual entries</p>
                              <div class="d-flex gap-3 justify-content-center justify-content-lg-start w-100"
                                  data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                                  <a href="https://subscriptions.sslinsight.com/" class="btn btn-primary btn-sm"
                                      target="_blank" rel="noreferrer">Get started
                                      &nbsp;&nbsp; <i class="fa fa-arrow-right fa-beat"></i></a>
                                  <a href="demo-video" class="btn btn-outline-white btn-sm">View demo video</a>
                              </div>

                          </div>

                          <div class="col-lg-4 iphone-wrap index-top-slider swiper d-none d-lg-block mx-0">
                              <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                      <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                          alt="Image" class="phone-1" data-aos="fade-left"
                                          style="border-top: 10px solid red;">
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="https://images.pexels.com/photos/2041627/pexels-photo-2041627.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1d "
                                          alt="Image" class="phone-1" data-aos="fade-left"
                                          style="border-top: 10px solid green;">
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="https://images.pexels.com/photos/6584941/pexels-photo-6584941.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt="Image" class="phone-1" data-aos="fade-left"
                                          style="border-top: 10px solid gold;">
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="https://images.pexels.com/photos/5989925/pexels-photo-5989925.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt="Image" class="phone-1" data-aos="fade-left"
                                          style="border-top: 10px solid #274685;">
                                  </div>
                              </div>
                          </div>
                      </div>

                      {{-- <div class='owl-carousel owl-theme align-items-center text-center client-space' data-aos="fade-up"> --}}
                      {{-- <div class="row justify-content-center text-center client-space">
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('img/clients/client-16.png')}}" alt="" height="100" width="150">
              </div>
              <div class="col-6 col-md-3">
                  <img src="{{ asset('img/clients/client-27.png')}}" alt="" height="100" width="150">
              </div>
              <div class="col-6 col-md-3">
                  <img src="{{ asset('img/clients/wadoye.png')}}" alt="" height="100" width="150">
              </div>
          </div>
          <div class="row justify-content-center text-center mt-5">
              <div class="col-6 col-md-3">
                  <img src="{{ asset('img/clients/client-2.jpg')}}" alt="" height="80" width="120">
              </div>
              <div class="col-6 col-md-3">
                  <img src="{{ asset('img/clients/client-3.png')}}" alt="" height="80" width="120">
              </div>
          </div> --}}
                  </div>
              </div>
          </div>

      </section><!-- End Hero -->

      <main id="main">

          <!-- ======= Services Section ======= -->
          @include('partials.remark-section')
          <!-- End Services Section -->

          <!-- ======= Services Section ======= -->
          @include('partials.services-section')
          <!-- End Services Section -->

          <!-- ======= News Feed Section ======= -->
          @include('partials.blogs-section')
          <!-- End News Feed Section -->

          <!-- ======= Testimonials Section ======= -->
          @include('partials.review-section')
          <!-- End Testimonials Section -->

      </main><!-- End #main -->
  @endsection
  <!-- ======= Footer ======= -->
