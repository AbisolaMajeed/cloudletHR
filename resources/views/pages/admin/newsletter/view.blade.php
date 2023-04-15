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
            <div class="row mb-3">
              <div class="col-md-6">
                  <h3 class="pb-1 mb-3">All Newsletters</h3>
              </div>
              <div class="col-md-6 text-end">
                  <a href="{{ url('/newsletter-subscriber/view-subscribers') }}" class="m-5">
                    <button type="button" class="btn btn-info">
                        <span class="tf-icons bx bx-list-ul"></span>&nbsp; All Subscribers
                    </button>
                  </a>
                  <a href="{{ url('dashboard/newsletter/add-newsletter') }}">
                      <button type="button" class="btn btn-primary">
                          <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Add Newsletter
                      </button>
                  </a>
              </div>
          </div>
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session()->get('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif 
            <div class="row mb-5">
              @foreach ($newsletters as $key => $newsletter)
              <div class="col-md-6">
                <div class="card mb-3">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img class="card-img card-img-left" src="{{ 'https://res.cloudinary.com/dvhfyuilj/image/upload/v1677485617/dqdlhqvky1dxh5gmp1fr.jpg' }}" alt="Card image"/>
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h4 class="card-title">{{ $newsletter->subject }}</h4>
                        <p class="card-text">
                          {{ Str::words($newsletter['content'], 25, '...') }}
                        </p>
                        <div class="row">
                          <div class="col-md-6">
                            <p class="card-text"><small class="text-muted">Category: {{ Str::ucfirst($newsletter->category ) }}</small></p>
                          </div>
                          <div class="col-md-6">
                            <a href="" class="card-link text-primary" data-bs-toggle="modal" data-bs-target="#sendNewsLetter{{$newsletter->id}}" ><i class="bx bx-send me-1"></i> Send</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#deleteNewsLetter{{$newsletter->id}}" class="card-link text-danger"><i class="bx bx-trash me-1"></i>Delete</a>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @include('partials.admin.send-newsletter-modal')
              @include('partials.admin.delete-modal') 
              @endforeach
            </div>
            <div class="d-flex">
              <div class="mx-auto">
                  {{ $newsletters->links("pagination::bootstrap-4")}}
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