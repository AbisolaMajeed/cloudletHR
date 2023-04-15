<!-- ======= Header ======= -->
@extends('layouts.master')
<!-- End Header -->
@section('content')
    <main id="main">

        <!-- ======= Our Team Section ======= -->

        <section class="hero-section-header d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center section-header">Our Team</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row post-entry text-center">
                    @if (count($teams) > 0)
                        @foreach ($teams as $key => $team)
                            @if ($key < 3)
                                <div class="col-md-4 mb-5 ">
                                    <div class="d-flex justify-content-center"><img src="{{ $team['image'] }}" alt="Image" class="img-fluid rounded-circle mb-2"
                                      width="50%"></div>
                                    <h4 class="text-dark mb-0 mt-3">{{ $team['position'] }}</h4>
                                    <p class="text-dark p-0 m-0">{{ $team['name'] }}</p>
                                </div>
                            @elseif ($key <= 4)
                                <div class="col-md-6">
                                  <div class="d-flex justify-content-center"><img src="{{ $team['image'] }}" alt="Image" class="img-fluid rounded-circle mb-2"
                                    width="35%"></div>
                                    <h4 class="text-dark mb-0 mt-3">{{ $team['position'] }}</h4>
                                    <p class="text-dark p-0 m-0">{{ $team['name'] }}</p>
                                </div>
                            @else
                                <div class="col-md-12 text-center">
                                  <div class="d-flex justify-content-center"><img src="{{ $team['image'] }}" alt="Image" class="img-fluid rounded-circle mb-2"
                                    width="18%"></div>
                                    <h4 class="text-dark mb-0 mt-3">{{ $team['position'] }}</h4>
                                    <p class="text-dark p-0 m-0">{{ $team['name'] }}</p>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="container">
                            <div class="misc-wrapper">
                                <h2 class="mb-2 mx-2">No record found</h2>
                                <p class="mb-4 mx-2">Update this page with list of active team members</p>
                                <a href="{{ url('dashboard/team/add-edit') }}" class="btn btn-primary">Add Team Members</a>
                                <div class="mt-4">
                                    @foreach ($images as $image)
                                        <img src="{{ $image->image_url }}" alt="" width="500" class="img-fluid"
                                            data-app-dark-img="" data-app-light-img="" />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
        @include('partials.review-section')
        <!-- End Testimonials Section -->

    </main><!-- End #main -->
@endsection
