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
                                                <h3 class="pb-1 mb-3">All Image Uploads</h3>
                                            </div>
                                            <div class="col-md-6 text-end mb-3">
                                                <a href="{{ url('dashboard/gallery/image/upload-image') }}">
                                                    <button type="button" class="btn btn-primary">
                                                        <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Upload Image
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        @if (session()->has('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session()->get('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <div class="row px-3" data-lightgallery="">
                                            @foreach ($images as $image)
                                                <div class="col-sm-6 col-lg-3 mb-3 img-gallery">
                                                    <button type="button" class="btn-close closeImg" data-bs-toggle="modal"
                                                        aria-label="Close" data-bs-target="#deleteImage{{ $image->id }}">
                                                    </button>
                                                    <a class="lightgallery-item" href="{{ $image->image_url }}">
                                                        <div class="d-flex flex-column justify-content-between">
                                                            <img src="{{ $image->image_url }}"
                                                                class="img-responsive border rounded"
                                                                alt="{{ $image->image_url }}" height="250"
                                                                style="object-fit:cover;">
                                                        </div>
                                                    </a>
                                                    <h6 class="my-3 text-dark">{{ $image->image_tag }}</h6>
                                                </div>
                                                {{-- <div class="col-sm-6 col-lg-4"><a class="lightgallery-item"
                                                                href="images/image-01-1200x800.jpg"><img
                                                                    src="{{ $image->image_url }}" width="400"
                                                                    height="300" alt=""></a></div> --}}
                                                @include('partials.admin.delete-modal')
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <br />
                                        {{ $images->links() }}
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
