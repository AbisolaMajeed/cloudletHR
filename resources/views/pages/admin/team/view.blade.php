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
            <div class="card">
              <div class="row">
                <div class="col-md-6">
                    <h3 class="card-header mb-4">All Team Members</h3>
                </div>
                @if (count($teams) > 0)
                <div class="col-md-6 text-end">
                    <a href="{{ url('dashboard/team/add-edit') }}">
                        <button type="button" class="btn btn-primary m-3">
                            <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Add Team Member
                        </button>
                    </a>
                </div>
                @endif
            </div>
                @if(session()->has('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @endif

              <div class="container">
                  <div class="row text-center">
                    @if (count($teams) > 0)
                      @foreach ($teams as $key => $team)
                      <div class="col-md-3 mb-5">
                          <img src="{{$team['image']}}" alt="Image" class="img-fluid rounded-circle mb-2" width="50%">
                          <h4 class="text-dark mb-0 mt-3">{{$team['position']}}</h4>
                          <p class="text-dark p-0 m-0">{{$team['name']}}</p>
                            <p class="text-center">
                              <a href="{{ url('dashboard/team/edit/'.$team->id) }}" class="m-3">Edit</a>
                              <a href="" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteTeam{{$team->id}}">Delete</a>
                            </p>
                      </div>
                      @include('partials.admin.delete-modal') 
                      @endforeach
                    @else
                    <div class="container my-5">
                        <div class="misc-wrapper">
                            <h2 class="mb-2 mx-2">No record found</h2>
                            <p class="mb-4 mx-2">Update this page with list of active team members</p>
                            <a href="{{ url('dashboard/team/add-edit')}}" class="btn btn-primary">Add Team Members</a>
                            <div class="mt-4">
                                @foreach ($images as $image)
                                <img src="{{ $image->image_url }}" alt="" width="500" class="img-fluid" data-app-dark-img="" data-app-light-img="" />
                                @endforeach    
                            </div>
                        </div>
                    </div>
                    @endif
              </div>
              <div class="d-flex">
                <div class="mx-auto">
                    {{ $teams->links("pagination::bootstrap-4")}}
                </div>
            </div>
            </div>
            <!-- Bootstrap Table with Header - Footer -->
  
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