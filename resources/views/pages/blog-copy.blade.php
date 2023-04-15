<!-- ======= Header ======= -->
@extends('layouts.master')
<!-- End Header -->
@section('content')
<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="hero-section inner-page">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay="">News Feeds</h1>
                            <p class="mb-5 contact" data-aos="fade-up" data-aos-delay="100">Check out our daily articles for
                                news, offers and updates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="blog-single" class="d-block mb-4">
                            <img src="{{asset('img/img_1.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-text">
                            {{-- <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span> --}}
                            <span class="post-meta">{{ $article['created_at']->format('F j, Y') }} &bullet; By <a href="#">{{$article['posted_by']}}</a></span>
                            <h3><a href="#">{{$article['content']}}</p>
                            <p><a href="#" class="readmore">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="blog-single" class="d-block mb-4">
                            <img src="{{asset('img/img_2.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-text">
                            <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                            <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            <p><a href="#" class="readmore">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="blog-single" class="d-block mb-4">
                            <img src="{{asset('img/img_3.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-text">
                            <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                            <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            <p><a href="#" class="readmore">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="blog-single" class="d-block mb-4">
                            <img src="{{asset('img/img_4.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-text">
                            <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                            <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            <p><a href="#" class="readmore">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="blog-single" class="d-block mb-4">
                            <img src="{{asset('img/img_3.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-text">
                            <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                            <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            <p><a href="#" class="readmore">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="blog-single" class="d-block mb-4">
                            <img src="{{asset('img/img_2.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-text">
                            <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                            <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            <p><a href="#" class="readmore">Read more</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <span class="p-3 active text-primary">1</span>
                    <a href="#" class="p-3">2</a>
                    <a href="#" class="p-3">3</a>
                    <a href="#" class="p-3">4</a>
                </div>
            </div>
        </div>

    </section>

</main><!-- End #main -->
@endsection
