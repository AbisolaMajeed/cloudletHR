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
              {{-- <h5 class="card-header mb-3">All Active Feedbacks</h5> --}}
              <div class="row">
                <div class="col-md-6">
                    <h3 class="card-header mb-4">All Settings</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ url('dashboard/setting/add-edit') }}">
                        <button type="button" class="btn btn-primary m-3">
                            <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Add Setting
                        </button>
                    </a>
                </div>
            </div>
              <div class="table-responsive text-nowrap">
                @if(session()->has('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @endif
  
                <table class="table">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Logo</th>
                        <th>Address</th>
                        <th>About</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($settings as $key => $setting)
                    <tr>
                      <td>{{ ++$loop->index }}</td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ $setting->name }}</strong></td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i> {{ $setting->email }} </td>
                      <td>{{ $setting->phone_number }}</td>
                      <td> <img src="{{ $setting->company_logo }}" alt="" width="30" height="30" > </td>
                      <td>{{ $setting->company_address }}</td>
                      <td>{{ $setting->about_company }}</td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item text-primary" href="{{ url('dashboard/setting/edit/'.$setting->id) }}">
                                <i class="bx bx-edit me-1"></i> Edit
                              </a>
                          </div>
                        </div>   
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                  <tfoot class="table-border-bottom-0">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Logo</th>
                        <th>Address</th>
                        <th>About</th>
                        <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
  
              <div class="text-center">
                <br />
                {{ $settings->links() }}
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