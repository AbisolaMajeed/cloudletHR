<!-- ======= Testimonials Section & News Feeds Section======= -->
@if ($feedback->count() > 0)
    <section class="section border-top border-bottom ">
        <div class="container">
            <span class="ios-img"><img src="{{ asset('img/ios-view-1.jpeg') }}" alt="" width="90"></span>
            <div class="row text-center justify-content-center text-center mb-5">
                <div class="col-md-5" data-aos="fade-left">
                    <h2 class="section-heading">Reviews From Clients</h2>
                </div>
            </div>
            <div class="row text-center justify-content-center text-center">
                <div class="col-md-7">
                    <div class="testimonials-slider swiper" data-aos="fade-up">
                        <div class="swiper-wrapper">
                            @foreach ($feedback as $key => $feedbacks)
                                <div class="swiper-slide">
                                    <div class="review text-center">
                                        <p class="review-user">
                                            @if (empty($feedback->image))
                                                <img src="https://res.cloudinary.com/dvhfyuilj/image/upload/v1676714594/uvr9uf6rliowqofttorg.png"
                                                    alt="Image" class="img-fluid rounded-circle mb-3" />
                                            @else
                                                <img src="{{ $feedbacks['image'] }}" alt="Image"
                                                    class="img-fluid rounded-circle mb-3">
                                            @endif
                                            <span class="d-block">
                                                <span class="text-white">{{ $feedbacks['name'] }}</span> &mdash;
                                                {{ $feedbacks['company_name'] }}
                                            </span>
                                        </p>
                                        <blockquote>
                                            <p>{{ $feedbacks['message'] }}</p>
                                        </blockquote>
                                    </div>
                                </div><!-- End testimonial item -->
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                        {{-- <div>
                        <p class="mt-5"><a href="feedback" class="btn btn-light btn-sm">Give Feedback</a></p>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials & News Feeds Section -->
@endif
