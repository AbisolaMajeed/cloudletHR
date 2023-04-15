  <!-- ======= Header ======= -->
  @extends('layouts.master')
  <!-- End Header -->
  @section('content')
      <main id="main">

          <!-- ======= Blog Section ======= -->
          <section class="hero-section-header d-flex align-items-center">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <h1 class="text-center section-header">News Feed</h1>
                          <p class="text-center">Check out our daily blogs for
                              news, offers and updates.
                          </p>
                      </div>
                  </div>
              </div>
          </section>

          <section class="section">
              <div class="container">
                  <div class="row mb-5">
                      @foreach ($blogs as $key => $blog)
                          <div class="col-md-4">
                              <div class="post-entry">
                                  <a href="{{ url('blog-single/' . $blog->id) }}" class="d-block mb-4">
                                      @if (!empty($blog->image))
                                          <img src="{{ $blog->image }}" alt="Image" class="img-fluid">
                                      @else
                                          <img src="{{ 'https://res.cloudinary.com/dvhfyuilj/image/upload/v1676466827/noooimxvcb5zwqufqs0n.jpg' }}"
                                              alt="Image" class="img-fluid">
                                      @endif
                                  </a>
                                  <div class="post-text">
                                      <p><small>Last updated {{ $blog->updated_at->format('F j, Y') }} &bullet; By
                                              {{ $blog->posted_by }}</small></p>
                                      <h3>{{ $blog->title }}</h3>
                                      <p> {{ Str::words($blog->content, 15, '...') }}</p>
                                      <p><a href="{{ url('blog-single/'.$blog->id) }}" class="text-dark">Read >></a></p>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>

                  <div class="row">
                      <div class="d-flex">
                          <div class="mx-auto">
                              {{ $blogs->links('pagination::bootstrap-4') }}
                          </div>
                      </div>
                  </div>

          </section>

      </main><!-- End #main -->
  @endsection
