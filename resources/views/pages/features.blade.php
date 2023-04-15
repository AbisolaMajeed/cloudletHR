<!-- ======= Header ======= -->
@extends('layouts.master')
<!-- End Header -->
@section('content')
  <main id="main">

    <!-- ======= Features Section ======= -->

    <section class="hero-section-header d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <h1 class="text-center section-header">Features</h1>
              </div>
          </div>
      </div>
    </section>

    <br><br><br>
    
    @foreach ($modules as $key => $module)

    @if($key % 2  ==  1)
    <section class="features-section">
      <div class="container features-container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto">
            <h3 class="mb-4 section-heading-4">{{$module->name}}
              <hr class="underline">
            </h3>
            <p class="mb-4 text-dark">{{Str::words($module->description, 500)}}</p>
            <p>
              <a href="" data-bs-toggle="modal" data-bs-target="#employeeModal{{$key}}" class="text-dark" style="font-weight: bold"> View Demo &nbsp;&nbsp;<i class="bi bi-arrow-right"></i></a>
            </p>
          </div>
          <div class="col-md-4" data-aos="fade-left">
            <img src="{{$module->image}}"  alt="Image" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    @else
      <section class="features-section">
        <div class="container features-container">
          <div class="row align-items-center">
            <div class="col-md-6 ms-auto order-2">
              <h3 class="mb-4 section-heading-4">{{$module->name}}
                <hr class="underline">
              </h3>
              <p class="mb-4 text-dark">{{Str::words($module->description, 500)}}</p>
                <p>
                  <a href="" data-bs-toggle="modal" data-bs-target="#employeeModal{{$key}}" class="text-dark" style="font-weight: bold"> View Demo &nbsp;&nbsp; <i class="bi bi-arrow-right"></i></a>
                </p>
            </div>
            <div class="col-md-4" data-aos="fade-right">
              <img src="{{$module->image}}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </section>
      @endif
      @include('partials.modal') 
      
    @endforeach
    <br><br><br>
    @include('partials.review-section')
  </main><!-- End #main -->
@endsection