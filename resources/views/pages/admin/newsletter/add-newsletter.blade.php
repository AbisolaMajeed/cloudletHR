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
                    @if(session()->has('success'))

                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session()->get('success') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>

                    @endif

                    <!-- Basic Layout -->
                    <div class="row">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    @if(!isset($newsletter->id))
                                    <div class="col-md-6">
                                        <h3 class="mb-3">Add NewsLetter</h3>
                                    </div>
                                    @else
                                    <div class="col-md-6">
                                        <h3 class="mb-0">Update NewsLetter</h3>
                                    </div>
                                    @endif
                                    <div class="col-md-6 text-end mb-4">
                                        <a href="{{ url('dashboard/newsletter/view') }}">
                                        <button type="button" class="btn btn-primary">
                                            <span class="tf-icons bx bx-list-ul"></span>&nbsp; All NewsLetters
                                        </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if(!isset($newsletter->id))
                                    <form action="{{ url('dashboard/newsletter/add-newsletter') }}" method="post" role="form" enctype="multipart/form-data" >
                                    @else
                                    <form action="{{ url('dashboard/newsletter/update') }}" method="post" role="form" enctype="multipart/form-data" >
                                    @endif
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                            <label class="form-label" for="subject">Subject</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control" id="subject" name="subject" value="{{isset($newsletter->subject) ? $newsletter->subject: old('subject')}}" placeholder="Enter newsletter subject" required/>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control" id="email" name="email" value="{{isset($newsletter->email) ? $newsletter->email: old('email')}}" placeholder="Enter subscriber email" required/>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select id="category" name="category" class="form-select" required>
                                              <option value="---" @if(old('category', $newsletter->category) == "---") selected @endif>---</option>
                                              <option value="sales" @if(old('category', $newsletter->category) == "sales") selected @endif>Sales</option>
                                              <option value="promotion" @if(old('category', $newsletter->category) == "promotion") selected @endif>Promotion</option>
                                              <option value="christmas" @if(old('category', $newsletter->category) == "christmas") selected @endif>Christmas</option>
                                              <option value="holiday" @if(old('category', $newsletter->category) == "holiday") selected @endif>Holiday</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label" for="content">Content</label>
                                          <div class="input-group input-group-merge">
                                              <textarea id="content" name="content" class="form-control" rows="12" placeholder="Enter the newsletter content here..." required>{{isset($newsletter->content) ? $newsletter->content: old('content')}}</textarea>
                                          </div>
                                        </div>
                                        <input type="hidden" name="id" value="{{isset($newsletter->id) ? $newsletter->id: old('id')}}">
                                        @if(!isset($newsletter->id))
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        @else
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        @endif
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