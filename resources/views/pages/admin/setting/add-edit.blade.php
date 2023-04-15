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
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        @if (!isset($setting->id))
                                        <div class="col-md-6">
                                            <h3 class="mb-3">Add Company Information</h3>
                                        </div>
                                        @else
                                        <div class="col-md-6">
                                            <h3 class="mb-0">Update Company Information</h3>
                                        </div>
                                        @endif
                                        <div class="col-md-6 text-end mb-4">
                                            <a href="{{ url('dashboard/setting/view') }}">
                                                <button type="button" class="btn btn-primary">
                                                    <span class="tf-icons bx bx-list-ul"></span>&nbsp; All Company
                                                    Information
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if (!isset($setting->id))
                                            <form action="{{ url('dashboard/setting/add-edit') }}" method="post"
                                                role="form" enctype="multipart/form-data">
                                            @else
                                                <form action="{{ url('dashboard/setting/update') }}" method="post"
                                                    role="form" enctype="multipart/form-data">
                                        @endif
                                        {{ csrf_field() }}
                                        <div class="row mb-3">
                                            <div class="col-md-8">
                                                <label class="form-label" for="email">Company Name</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ isset($setting->name) ? $setting->name : old('name') }}"
                                                        placeholder="Ex: Soft Solutions Limited" required />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label" for="email">Company Email</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="email"
                                                        class="form-control"
                                                        id="email" name="email"
                                                        value="{{ isset($setting->email) ? $setting->email : old('email') }}"
                                                        placeholder="Ex: enterprise@ss-limited.com" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="phone_number">Company Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <input type="number" class="form-control" id="phone_number"
                                                    name="phone_number"
                                                    value="{{ isset($setting->phone_number) ? $setting->phone_number : old('phone_number') }}"
                                                    placeholder="Ex: 08176764556" maxlength="11" required />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="company_logo" class="form-label">Upload Company Logo</label>
                                            <input class="form-control" type="file" id="company_logo" name="company_logo"
                                                value="" required />
                                            @if(isset($setting->id))
                                                <img src="{{ $setting->company_logo }}" alt="" width="70"
                                                    height="70" class="mt-2" />
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="company_address">Company Address</label>
                                            <div class="input-group input-group-merge">
                                                <textarea id="company_address" name="company_address" class="form-control" rows="3"
                                                    placeholder="Ex: 16B, Resident Road, Gbagada, Lagos, Nigeria" required>{{ isset($setting->company_address) ? $setting->company_address : old('company_address') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="about_company">About Company</label>
                                            <div class="input-group input-group-merge">
                                                <textarea id="about_company" name="about_company" class="form-control" rows="8"
                                                    placeholder="Enter brief description about your company" required>{{ isset($setting->about_company) ? $setting->about_company : old('about_company') }}</textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id"
                                            value="{{ isset($setting->id) ? $setting->id : old('id') }}">
                                        @if (!isset($setting->id))
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        @else
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#updateSetting{{ $setting->id }}">Update</button>
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
