<!-- ======= Header ======= -->
@extends('layouts.master')
<!-- End Header -->
@section('content')
  
  <main id="main">

    <section class="hero-section-header d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <h1 class="text-center section-header">Get in touch</h1>
                <p class="text-center">We are one step away to answering your questions about the application.</p>
              </div>
          </div>
      </div>
    </section>

    <section class="section">
      <div class="container features-container text-dark">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Contact Form</h2>
            <p class="mb-0">Kindly fill the form fields provided below for questions and suggestions.</p>
          </div>

        </div>

        <div class="row">
          @include('partials.contact-info-section')

          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="contact" method="post" role="form" class="php-email-form"> 
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <label for="subject">Purpose</label>
                  <select class="form-control" id="subject" name="subject"  required>
                    <option value="">---</option>
                    <option value="Request for demo">Request For Demo</option>
                    <option value="Enquiry">Enquiry</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <div class="col-md-12 form-group mt-3 mb-3">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" rows="3" style="height:100%;"></textarea>
                </div>

                <div class="col-md-6 form-group mt-4">
                  <input type="submit" class="btn btn-primary d-block w-100" value="Send Message">
                </div>
              </div>

            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- ======= Testimonials Section & News Feeds Section======= -->
    @include('partials.review-section')
  <!-- End Testimonials & News Feeds Section -->
  </main><!-- End #main -->
  @endsection
 