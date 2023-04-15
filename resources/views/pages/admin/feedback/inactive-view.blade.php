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
                            <h3 class="card-header">All Inactive Feedbacks</h3>
                            <div class="table-responsive text-nowrap">
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session()->get('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="text-center">
                                    {{ $inactivefeedbacks->links() }}
                                    <br />
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Client</th>
                                            <th>Users</th>
                                            <th>Message</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($inactivefeedbacks as $key => $feedback)
                                            <tr>
                                                <td>{{ ++$loop->index }}</td>
                                                <td><i class="fab fa-angular fa-lg text-danger"></i>
                                                    <strong>{{ $feedback->name }}t</strong></td>
                                                <td><i class="fab fa-angular fa-lg text-danger"></i> {{ $feedback->email }}
                                                </td>
                                                <td>{{ $feedback['company_name'] }}</td>
                                                <td>
                                                    <ul
                                                        class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Lilian Fuller">
                                                            @if (empty($feedback->image))
                                                                <img src="https://res.cloudinary.com/dvhfyuilj/image/upload/v1676714594/uvr9uf6rliowqofttorg.png"
                                                                    alt="Avatar" class="rounded-circle" />
                                                            @else
                                                                <img src="{{ $feedback->image }}" alt="Avatar"
                                                                    class="rounded-circle" />
                                                            @endif
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>{{ $feedback['message'] }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item text-success" href=""
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#activateModal{{ $feedback->id }}">
                                                                <i class="bx bx-edit-alt me-1"></i> Activate
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @include('partials.admin.feedback-modal')
                                        @endforeach

                                    </tbody>
                                    <tfoot class="table-border-bottom-0">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Client</th>
                                            <th>Users</th>
                                            <th>Message</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>

                            <div class="text-center">
                                <br />
                                {{ $inactivefeedbacks->links() }}
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
