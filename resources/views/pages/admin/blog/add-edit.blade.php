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
                        @elseif (session()->has('danger'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session()->get('danger') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Basic Layout -->
                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center pb-1 mb-4">
                                        @if (!isset($blog->id))
                                            <div class="col-md-6">
                                                <h2 class="">Add Blog</h2>
                                            </div>
                                        @else
                                            <div class="col-md-6">
                                                <h2 class="">Update Blog</h2>
                                            </div>
                                        @endif
                                        <div class="col-md-6 text-end mb-4">
                                            <a href="{{ url('dashboard/blog/view') }}">
                                                <button type="button" class="btn btn-primary">
                                                    <span class="tf-icons bx bx-list-ul"></span>&nbsp; All Blogs
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if (!isset($blog->id))
                                            <form enctype="multipart/form-data"
                                                action="{{ url('dashboard/blog/add-edit') }}" method="post" role="form">
                                            @else
                                                <form enctype="multipart/form-data" accept-charset="utf-8"
                                                    action="{{ url('dashboard/blog/update') }}" method="post"
                                                    role="form">
                                        @endif
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                            <label class="form-label" for="title">Title</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control" id="title" name="title"
                                                    value="{{ isset($blog->title) ? $blog->title : old('title') }}"
                                                    placeholder="Enter the blog title" required />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="author">Author</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control" id="author" name="author"
                                                    value="{{ isset($blog->author) ? $blog->author : old('author') }}"
                                                    placeholder="Enter the blog Authour" required />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Upload Image</label>
                                            @if (isset($blog->id))
                                                <p><small class="text-primary">* Kindly upload a new image to update this
                                                        file</small></p>
                                            @endif
                                            <input class="form-control" type="file" id="image" name="image[]"
                                                value="{{ isset($blog->image) ? $blog->image : old('image[]') }}" multiple>
                                            @if (isset($blog->id) && !empty($blog->image))
                                                <img src="{{ $blog->image }}" alt="" width="70" height="70"
                                                    class="mt-2" />
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="posted_by">Posted By</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control" id="posted_by" name="posted_by"
                                                    value="Admin" readonly />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="content">Content</label>
                                            <div class="input-group input-group-merge">
                                                <textarea id="content" name="content" class="form-control" rows="12" placeholder="Enter the blog content here..."
                                                    required> {{ isset($blog->content) ? $blog->content : old('content') }}</textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id"
                                            value="{{ isset($blog->id) ? $blog->id : old('id') }}">
                                        @if (!isset($blog->id))
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        @else
                                            {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#updateBlog{{ $blog->id }}">Update</button>
                                        @endif
                                        @include('partials.admin.update-modal')
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
