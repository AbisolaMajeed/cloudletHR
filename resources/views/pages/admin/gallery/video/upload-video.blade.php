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
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="col-md-6">
                                            <h3 class="mb-3">Video Upload</h3>
                                        </div>
                                        <div class="col-md-6 text-end mb-4">
                                            <a href="{{ url('dashboard/gallery/video/view') }}">
                                                <button type="button" class="btn btn-primary">
                                                    <span class="tf-icons bx bx-list-ul"></span>&nbsp; All Videos
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('dashboard/gallery/video/upload-video') }}" method="post"
                                            role="form" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label for="video_tag" class="form-label">Tag</label>
                                                <input class="form-control" type="text" id="video_tag" name="video_tag"
                                                    placeholder="Ex: HRM demo video" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="video_url" class="form-label">Upload Video</label>
                                                <input class="form-control" type="text" id="video_url" name="video_url"
                                                    placeholder="Ex: https://res.cloudinary.com/dvhfyuilj/video/upload/v1676297861/jt9ggeugnm89eabokdmv.mp4"
                                                    required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </form>
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
