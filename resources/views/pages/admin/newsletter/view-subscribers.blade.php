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
                            <div class="card-header row">
                                <div class="col-md-6">
                                    <h3 class="my-4">All Active Subscribers</h3>
                                </div>
                                <div class="col-md-6 text-end my-4">
                                    <a href="{{ url('dashboard/newsletter/view') }}">
                                        <button type="button" class="btn btn-primary">
                                            <span class="tf-icons bx bx-list-ul"></span>&nbsp; All NewsLetters
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

                            <table id="subscribersTable" class="table table-striped table-borderless" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newsletter_subscribers as $key => $newsletter_subscriber)
                                        <tr>
                                            <td>{{ ++$loop->index }}</td>
                                            <td><i class="fab fa-angular fa-lg text-danger"></i>
                                                <strong>{{ $newsletter_subscriber->email }}</strong>
                                            </td>
                                            <td><i class="fab fa-angular fa-lg text-danger"></i>
                                                {{ $newsletter_subscriber->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="table-border-bottom-0">
                                    <tr>
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
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
