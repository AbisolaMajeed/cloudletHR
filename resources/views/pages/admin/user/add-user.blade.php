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
                        @endif

                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="col-md-6">
                                            <h3 class="mb-3">Add User</h3>
                                        </div>
                                        <div class="col-md-6 text-end mb-4">
                                            <a href="{{ url('dashboard/user/view') }}">
                                                <button type="button" class="btn btn-primary">
                                                    <span class="tf-icons bx bx-list-ul"></span>&nbsp; All Users
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('dashboard/user/add-user') }}" method="post" role="form">
                                            {{ csrf_field() }}
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label class="form-label" for="name">Name</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" id="name"
                                                            name="name"
                                                            value="{{ isset($user->name) ? $user->name : old('name') }}"
                                                            placeholder="Ex: John Doe" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="email">Email</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="email"
                                                            class="@error('email') is-invalid @enderror form-control"
                                                            id="email" name="email"
                                                            value="{{ isset($user->email) ? $user->email : old('email') }}"
                                                            placeholder="Ex: johndoe@gmail.com" required />
                                                    </div>
                                                    @error('email')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label" for="password">Password</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" id="password"
                                                            name="password"
                                                            value="{{ isset($user->password) ? $user->password : old('password') }}"
                                                            placeholder="Ex: ******" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add</button>
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
