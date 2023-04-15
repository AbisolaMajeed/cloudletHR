<!-- ======= Header ======= -->
@extends('layouts.master')
<!-- End Header -->
@section('content')
<main id="main">

    <!-- ======= Frequently Asked Questions Section ======= -->

    <section class="hero-section-header d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center section-header">Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
              <div class="accordion" id="accordionExample">
                @foreach ($faqs as $key => $faq )
                  @if($key == 1)
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" >
                        <h4 class="faq-text">{{$faq['title']}}</h4>
                      </button>
                    <div id="collapse{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class="text-dark">{{$faq['content']}}</p>
                      </div>
                    </div>
                  @else
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" >
                        <h4 class="faq-text">{{$faq['title']}}</h4>
                      </button>
                    <div id="collapse{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class="text-dark">{{$faq['content']}}</p>
                      </div>
                    </div>
                  @endif
                  @endforeach
                </div>
        </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    @include('partials.review-section')
    <!-- End Testimonials Section -->

</main><!-- End #main -->
@endsection