<!-- ======= Header ======= -->
@extends('layouts.master')
<!-- End Header -->
@section('content')
  
  <main id="main">

    <section class="hero-section-header d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <h1 class="text-center section-header">Feedback</h1>
              </div>
          </div>
      </div>
    </section>

    <section class="section">
      <div class="container features-container text-dark">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Feedback Form</h2>
            <p class="mb-0">Kindly fill the form fields provided below to give candid reviews.</p>
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
            <form action="feedback" method="post" role="form" class="php-email-form" enctype="multipart/form-data"> 
              {{ csrf_field() }}

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0 mb-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0 mb-3">
                  <label for="email">Company Name</label>
                  <input type="text" class="form-control" name="company_name" id="company_name" required>
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0 mb-3">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <label for="image">Upload Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="col-md-12 form-group mt-3 mb-3">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" rows="3" style="height:100%;" required></textarea>
                </div>

                <div class="col-md-6 form-group mt-4">
                  <input type="submit" class="btn btn-primary d-block w-100" value="Send Feedback">
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
 