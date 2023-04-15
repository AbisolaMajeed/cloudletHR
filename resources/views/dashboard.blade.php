<!-- ======= Header ======= -->
@extends('layouts.admin-master')
<!-- End Header -->

@section('content')
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        {{-- <div class="app-brand justify-content-center">
          <a href="/login"><img src="img/logo-1.png" alt=""></a>
    </div> --}}

        @include('partials.admin.menu')

        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            @include('partials.admin.nav-bar')

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                  <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Welcome {{ Auth::user()->name }}! 🎉</h5>
                            <p class="mb-4">
                              Navigate through available features here...
                            </p>
  
                            <a href="{{ url('/') }}" class="btn btn-sm btn-outline-primary">Go to website</a>
                          </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                          <div class="card-body pb-0 px-0 px-md-4">
                            <img
                              src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}"
                              height="140"
                              alt="View Badge User"
                              data-app-dark-img="illustrations/man-with-laptop-dark.png"
                              data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img
                                  src="../assets/img/icons/unicons/chart-success.png"
                                  alt="chart success"
                                  class="rounded"
                                /> --}}
                                <i class="menu-icon tf-icons bx bxl-blogger"></i>
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt3"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                  <a class="dropdown-item" href="{{ url('dashboard/blog/view') }}">View More</a>
                                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Blog</span>
                            <h3 class="card-title mb-2">{{ $blogs }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Available blogs</small></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img
                                  src="../assets/img/icons/unicons/wallet-info.png"
                                  alt="Credit Card"
                                  class="rounded"
                                /> --}}
                                <i class='bx bx-image'></i>
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt6"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                  <a class="dropdown-item" href="{{ url('dashboard/gallery/image/view') }}">View More</a>
                                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                              </div>
                            </div>
                            <span>Image</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $images }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Image galllery</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Total Revenue -->
                  <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                    <div class="row">
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" /> --}}
                                <i class='bx bxs-news'></i>
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt4"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                  <a class="dropdown-item" href="{{  url('dashboard/feedback/active-view') }}">View More</a>
                                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                              </div>
                            </div>
                            <span class="d-block mb-1">Active Feedback</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $activefeedbacks }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Can be uploaded</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" /> --}}
                                <i class='bx bx-news'></i>
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt4"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                  <a class="dropdown-item" href="{{ url('dashboard/feedback/inactive-view') }}">View More</a>
                                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                              </div>
                            </div>
                            <span class="d-block mb-1">Inactive Feedback</span>
                            <h3 class="card-title text-nowrap mb-2">{{  $inactivefeedbacks }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Not uploaded</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Total Revenue -->
                  <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                    <div class="row">
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" /> --}}
                                <i class='bx bx-video'></i>
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt4"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                  <a class="dropdown-item" href="{{ url('dashboard/gallery/video/view') }}">View More</a>
                                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                              </div>
                            </div>
                            <span class="d-block mb-1">Video</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $videos }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Video gallery</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" /> --}}
                                <i class="menu-icon tf-icons bx bxs-user"></i>
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt1"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                  <a class="dropdown-item" href="{{ url('dashboard/user/view') }}">View More</a>
                                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Users</span>
                            <h3 class="card-title mb-2">{{ $users }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Users available</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                    <div class="row">
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" /> --}}
                                <i class="menu-icon tf-icons bx bxl-microsoft-teams"></i>
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt4"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                  <a class="dropdown-item" href="{{ url('dashboard/team/view') }}">View More</a>
                                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                              </div>
                            </div>
                            <span class="d-block mb-1">Team</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $teams }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Check out active team members</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" /> --}}
                                <i class="menu-icon tf-icons bx bx-envelope"></i>
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt4"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                  <a class="dropdown-item" href="{{ url('dashboard/newsletter/view') }}">View More</a>
                                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                              </div>
                            </div>
                            <span class="d-block mb-1">Newsletter</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $newsletters }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> View subscribers, save template & send...</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , Copyright {{ config('app.name') }}. All Rights Reserved. <a
                                href="https://www.ss-limited.com" target="_BLANK">Soft Solutions Limited</a>
                        </div>
                        <div>
                            <a href="#" class="footer-link me-4">License</a>

                            <a href="#" class="footer-link me-4">Documentation</a>

                            <a href="#" class="footer-link me-4">Support</a>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

{{-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> --}}
@endsection
