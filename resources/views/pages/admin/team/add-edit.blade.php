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

                      @elseif (session()->has('danger'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('danger') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    @if(!isset($team->id))
                                    <div class="col-md-6">
                                        <h3 class="mb-3">Add Team Members</h3>
                                    </div>
                                    @else<div class="col-md-6">
                                        <h3 class="mb-0">Update Team Members</h3>
                                    </div>
                                    @endif
                                    <div class="col-md-6 text-end mb-4">
                                        <a href="{{ url('dashboard/team/view') }}">
                                        <button type="button" class="btn btn-primary">
                                            <span class="tf-icons bx bx-list-ul"></span>&nbsp; All Team Members
                                        </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if(!isset($team->id))
                                    <form action="{{ url('dashboard/team/add-edit') }}" method="post" role="form" enctype="multipart/form-data" >
                                    @else
                                    <form action="{{ url('dashboard/team/update') }}" method="post" role="form" enctype="multipart/form-data" >
                                    @endif
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Name</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control" id="name" name="name" value="{{isset($team->name) ? $team->name: old('name')}}" placeholder="Ex: John Doe" required/>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Position</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control" id="position" name="position" value="{{isset($team->position) ? $team->position: old('position')}}" placeholder="Ex: Sales Manager" required/>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Upload Image</label> 
                                            <input class="form-control" type="file" id="image" name="image" value="" required>
                                            @if(isset($team->id))
                                            <img src="{{ $team->image }}" alt="" width="70" height="70" class="img-fluid mt-2" />
                                            @endif
                                        </div>
                                        <input type="hidden" name="id" value="{{isset($team->id) ? $team->id: old('id')}}">
                                        @if(!isset($team->id))
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        @else
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateTeam{{$team->id}}">Update</button>
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