@extends('layouts.admin-master')

@section('content')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('partials.admin.nav-bar')
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row px-3">
                                            <div class="col-md-6">
                                                <h3 class="pb-1 mb-3">All Video Uploads</h3>
                                            </div>
                                            <div class="col-md-6 text-end">
                                                <a href="{{ url('dashboard/gallery/video/upload-video') }}">
                                                    <button type="button" class="btn btn-primary">
                                                        <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Upload Video
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session()->get('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <div class="row px-3" data-lightgallery="">
                                            <div class="col-12">
                                                <div class="row">
                                                    @if ($videos)
                                                        @foreach ($videos as $video)
                                                            <div class="col-sm-6 col-lg-4 mb-3 img-gallery">

                                                                <button type="button" class="btn-close closeImg"
                                                                    aria-label="Close" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteVideo{{ $video->id }}"></button>
                                                                <a class="lightgallery-item" href="{{ $video->video_url }}">
                                                                    <div class="d-flex flex-column justify-content-between">
                                                                        <video controls preload="auto" height="250px">
                                                                            <source src="{{ $video->video_url }}"
                                                                                type='video/mp4'>
                                                                        </video>
                                                                    </div>
                                                                </a>
                                                                <h6 class="my-3 text-dark">{{ $video->video_tag }}
                                                                </h6>

                                                            </div>
                                                            @include('partials.admin.delete-modal')
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <br />
                                                {{ $videos->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- / Content -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->

            </div>
            <!-- / Layout page -->
        </div>

    </div>
    <!-- / Layout wrapper -->

@endsection
