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

                        <!-- Bootstrap Table with Header - Footer -->
                        {{-- <div class="card"> --}}

                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="pb-1 mb-3">All Blogs</h3>
                            </div>
                            <div class="col-md-6 text-end mb-4">
                                <a href="{{ url('dashboard/blog/add-edit') }}">
                                    <button type="button" class="btn btn-primary">
                                        <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Add Blog
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

                        <div class="row my-3">
                            @if (count($blogs) > 0)
                                @foreach ($blogs as $key => $blog)
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card mb-3">
                                            {{-- @if (!empty($blog->image))
                                                <div class="row">
                                                    @foreach (explode('||', $blog->image) as $blog_image)
                                                        <div class="col-md-3 pr-0">
                                                            <img class="card-img-top" src="{{ $blog_image }}"
                                                                alt="Card image cap" />
                                                        </div>
                                                        @if ($loop->iteration % 4 == 0)
                                                </div>
                                                        <div class="row mt-2">
                                                        @endif
                                                    @endforeach
                                                        </div>
                                            @else
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img class="card-img-top"
                                                            src="{{ 'https://res.cloudinary.com/dvhfyuilj/image/upload/v1676466827/noooimxvcb5zwqufqs0n.jpg' }}"
                                                            alt="Card image cap" />
                                                    </div>
                                                </div>
                                            @endif --}}
                                            <div class="row">
                                                {{-- @foreach ($blogs as $key => $blog) --}}
                                                    <div class="col-md-12">
                                                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-bs-target="#carouselExample" data-bs-slide-to="{{ $loop->index }}"
                                                                    class="{{ $loop->first ? 'active' : '' }}"></li>
                                                            </ol>
                    
                                                            {{-- <div class="col-md-3 pr-0">
                                                                    <img class="card-img-top" src="{{ $blog_image }}" alt="Card image cap" />
                                                                </div>
                                                            @endforeach --}}
                                                            <div class="carousel-inner">
                                                                @foreach (explode('||', $blog->image) as $blog_image)
                                                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                        {{-- <img src="{{ $blog_image }}" class="card-img-top"
                                                                            alt="Card image cap"> --}}
                                                                        {{-- <div class="carousel-caption d-none d-md-block">
                                                                <h5>{{$value->title}}</h5>
                                                                <p>{{$value->description}}</p>
                                                                </div> --}}
                                                                        <img src="{{ empty($blog_image) ? 'https://res.cloudinary.com/dvhfyuilj/image/upload/v1676466827/noooimxvcb5zwqufqs0n.jpg' : $blog_image }}"
                                                                        class="card-img-top"
                                                                        alt="Card image cap">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            {{-- <div class="carousel-inner">
                                                                <div class="carousel-item active carousel-item-start">
                                                                    <img class="d-block w-100" src="{{ asset('assets/img/elements/13.jpg') }}"
                                                                        alt="First slide">
                                                                    <div class="carousel-caption d-none d-md-block">
                                                                        <h3>First slide</h3>
                                                                        <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue
                                                                            pertinacia.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item carousel-item-next carousel-item-start">
                                                                    <img class="d-block w-100" src="{{ asset('assets/img/elements/2.jpg') }}"
                                                                        alt="Second slide">
                                                                    <div class="carousel-caption d-none d-md-block">
                                                                        <h3>Second slide</h3>
                                                                        <p>In numquam omittam sea.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100" src="{{ asset('assets/img/elements/18.jpg') }}"
                                                                        alt="Third slide">
                                                                    <div class="carousel-caption d-none d-md-block">
                                                                        <h3>Third slide</h3>
                                                                        <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco
                                                                            mel
                                                                            no.</p>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <a class="carousel-control-prev" href="#carouselExample" role="button"
                                                                data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExample" role="button"
                                                                data-bs-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                {{-- @endforeach --}}
                                            </div>
                                            
                        <div class="card-body">
                            <p class="card-text">
                                <small>Last updated {{ $blog->updated_at->diffForHumans() }} &bullet; By
                                    {{ $blog->posted_by }}</a></small>
                            </p>
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">
                                {{ Str::words($blog->content, 15, '...') }}
                            </p>

                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text"><a href="{{ url('blog-single/' . $blog->id) }}" class=""><i
                                                class="bx bx-folder-open me-1"></i>Read</a></p>
                                </div>
                                <div class="col-md-8 text-end">
                                    <a href="{{ url('dashboard/blog/edit/' . $blog->id) }}"
                                        class="card-link text-primary"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a href="" data-bs-toggle="modal"
                                        data-bs-target="#deleteBlog{{ $blog->id }}" class="card-link text-danger"><i
                                            class="bx bx-trash me-1"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('partials.admin.delete-modal')
                @endforeach
            @else
                <div class="col-md-12">
                    <h3 class="text-center mt-5">No data found</h3>
                </div>
                @endif
            </div>
            <div class="d-flex">
                <div class="mx-auto">
                    {{ $blogs->links('pagination::bootstrap-4') }}
                </div>
            </div>
            {{-- </div> --}}
            <!-- Bootstrap Table with Header - Footer -->


        </div>
        <!-- / Content -->

    </div>
    <!-- Content wrapper -->



    </div>
    <!-- / Layout page -->
    </div>

    </div>
    <!-- / Layout wrapper -->

@endsection
