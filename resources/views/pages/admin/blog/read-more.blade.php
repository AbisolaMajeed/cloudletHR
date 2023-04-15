  <!-- ======= Header ======= -->
  @extends('layouts.master')
  <!-- End Header -->

  @section('content')
  <main id="main">

    <!-- ======= Single Blog Section ======= -->
    <section class="hero-section-header d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <h1 class="text-center section-header">News</h1>
                <p class="text-center">Check out our daily blogs for
                  news, offers and updates.</p>
              </div>
          </div>
      </div>
    </section>

    <section class="section pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">

            <h3 class="mb-5">{{ $blogs->title }}</h3>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae expedita cumque necessitatibus ducimus debitis totam, quasi praesentium eveniet tempore possimus illo esse, facilis? Corrupti possimus quae ipsa pariatur cumque, accusantium tenetur voluptatibus incidunt reprehenderit, quidem repellat sapiente, id, earum obcaecati.</p> --}}

            <div class="row mb-5">
              <div class="col-md-6">
                <figure><img src="{{ $blogs->image }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                  <figcaption>This is an image caption</figcaption>
                </figure>
              </div>
              <div class="col-md-6">
                <figure><img src="{{ $blogs->image }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                  <figcaption>This is an image caption</figcaption>
                </figure>
              </div>
            </div>

            <p>{{ $blogs->content }}</p>

            <div class="pt-5">
              <h3 class="mb-5">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="{{ asset('https://res.cloudinary.com/dvhfyuilj/image/upload/v1676635033/qc2wyjzybfm2l3e1x8ri.jpg') }}" alt="Free Website Template by Free-Template.co">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="{{ asset('https://res.cloudinary.com/dvhfyuilj/image/upload/v1676635033/qc2wyjzybfm2l3e1x8ri.jpg') }}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="{{ asset('https://res.cloudinary.com/dvhfyuilj/image/upload/v1676635033/qc2wyjzybfm2l3e1x8ri.jpg') }}" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>

                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="{{ asset('https://res.cloudinary.com/dvhfyuilj/image/upload/v1676635033/qc2wyjzybfm2l3e1x8ri.jpg') }}" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

                          <ul class="children">
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="{{ asset('https://res.cloudinary.com/dvhfyuilj/image/upload/v1676635033/qc2wyjzybfm2l3e1x8ri.jpg') }}" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="{{ 'https://res.cloudinary.com/dvhfyuilj/image/upload/v1676635033/qc2wyjzybfm2l3e1x8ri.jpg' }}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->

              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group mt-3">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group mt-3">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group mt-3">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group mt-3 mb-5">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div>
          <div class="col-md-4 sidebar mt-5">
            <div class="sidebar-box">
              <img src="{{'https://res.cloudinary.com/dvhfyuilj/image/upload/v1676714499/pvodujxmcv8tt4lkazmr.png'}}" alt="Image placeholder" class="img-fluid mb-4">
              <h3>About The Author</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              {{-- <p><a href="#" class="btn btn-primary btn-sm">Read >></a></p> --}}
            </div>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->
  @endsection
  