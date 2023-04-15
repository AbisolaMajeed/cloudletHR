<!-- ======= Header ======= -->
@extends('layouts.master')
<!-- End Header -->
@section('content')
  <main id="main">

    <!-- ======= FeatPricingures Section ======= -->
    <div class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="" data-aos-delay="" class="mt-4">Our Pricing</h1>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-md-7 mb-5">
            <h2 class="section-heading">Choose A Plan</h2>
            <p>Features available on each plan varies. For best use of the application, the professional plan is recommended.</p>
          </div>
        </div>
        <div class="row align-items-stretch">

          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="pricing h-100 text-center">
              <span>&nbsp;</span>
              <h3>Basic</h3>
              <ul class="list-unstyled">
                <li>Create up to 5 forms</li>
                <li>Generate 100 monthly reports</li>
              </ul>
              <div class="price-cta">
                <strong class="price">Free</strong>
                <p><a href="#" class="btn btn-white">Choose Plan</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="pricing h-100 text-center popular">
              <span class="popularity">Most Popular</span>
              <h3>Professional</h3>
              <ul class="list-unstyled">
                <li>Create up to 20 forms</li>
                <li>Generate 2500 monthly reports</li>
                <li>Manage a team of up to 5 people</li>
              </ul>
              <div class="price-cta">
                <strong class="price">&#8358;9.95/month</strong>
                <p><a href="#" class="btn btn-white">Choose Plan</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="pricing h-100 text-center">
              <span class="popularity">Best Value</span>
              <h3>Ultimate</h3>
              <ul class="list-unstyled">
                <li>Create up to 20 forms</li>
                <li>Generate 2500 monthly reports</li>
                <li>Manage a team of up to 5 people</li>
              </ul>
              <div class="price-cta">
                <strong class="price">&#8358;199.95/month</strong>
                <p><a href="#" class="btn btn-white">Choose Plan</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom">
      <div class="container">
          <div class="row justify-content-center text-center mb-5">
              <div class="col-md-4">
                  <h2 class="section-heading">Review From Our Users</h2>
              </div>
          </div>
          <div class="row justify-content-center text-center">
              <div class="col-md-7">

                  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                      <div class="swiper-wrapper">

                          <div class="swiper-slide">
                              <div class="review text-center">
                                  <p class="stars">
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill muted"></span>
                                  </p>
                                  <h3>Excellent App!</h3>
                                  <blockquote>
                                      <p>It was an easy setup, easy implementation, and our employees love the ease of use. 
                                        We have gotten remarkable feedback from our new hires on how efficient our onboarding
                                         is now that we have CloudletHR.</p>
                                  </blockquote>

                                  <p class="review-user">
                                      <img src="{{asset('img/person_1.jpg')}}" alt="Image"
                                          class="img-fluid rounded-circle mb-3">
                                      <span class="d-block">
                                          <span class="text-black">Jean Doe</span>, &mdash; App User
                                      </span>
                                  </p>

                              </div>
                          </div><!-- End testimonial item -->

                          <div class="swiper-slide">
                              <div class="review text-center">
                                  <p class="stars">
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill muted"></span>
                                  </p>
                                  <h3>This App is easy to use!</h3>
                                  <blockquote>
                                    <p>Easy to get started, and the free trial is a good idea if you're on the fence about it. 
                                        CloudletHR is a time-saver, and can help you spend more time on other, more important tasks.</p>
                                  </blockquote>

                                  <p class="review-user">
                                      <img src="{{asset('img/person_2.jpg')}}" alt="Image"
                                          class="img-fluid rounded-circle mb-3">
                                      <span class="d-block">
                                          <span class="text-black">Johan Smith</span>, &mdash; App User
                                      </span>
                                  </p>

                              </div>
                          </div><!-- End testimonial item -->

                          <div class="swiper-slide">
                              <div class="review text-center">
                                  <p class="stars">
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill"></span>
                                      <span class="bi bi-star-fill muted"></span>
                                  </p>
                                  <h3>Awesome functionality!</h3>
                                  <blockquote>
                                    <p>CloudletHR Helped in better managing leaves and payroll, 
                                        it offers a free version, which can be used to test if it suits the specific organization, 
                                        I specifically like the Payroll Management feature</p>
                                  </blockquote>

                                  <p class="review-user">
                                      <img src="{{asset('img/person_3.jpg')}}" alt="Image"
                                          class="img-fluid rounded-circle mb-3">
                                      <span class="d-block">
                                          <span class="text-black">Jean Thunberg</span>, &mdash; App User
                                      </span>
                                  </p>

                              </div>
                          </div><!-- End testimonial item -->

                      </div>
                      <div class="swiper-pagination"></div>
                      <div>
                        <p class="mt-5"><a href="feedback" class="btn btn-primary btn-sm">Give Feedback</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
@endsection
 