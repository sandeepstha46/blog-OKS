@extends('layouts.app')
@section('body')
<div class="content container-fluid">
    <div class="page-header mt-5">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Profile</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="profile-header">
                <div class="row align-items-center">
                    <div class="col-auto profile-image">
                        <a href="#">
                            <img class="rounded-circle" alt="User Image"
                                src="{{ (!empty($user->profile_photo_path))? url('images/upload_images/admin_images/'.$user->profile_photo_path): url('images/upload_images/no_avatar.png') }}">
                        </a>
                    </div>
                    <div class="col ml-md-n2 profile-user-info">
                        <h4 class="user-name mb-3">{{ $user->name }}</h4>
                        <h6 class="text-muted mt-1">{{ $user->email }}</h6>
                        <div class="user-Location mt-1">Florida, United States</div>
                        <div class="about-text">Here</div>
                        <div class="about-text">Here</div>
                    </div>
                    <div class="col-auto profile-btn">
                        <a href="{{ route('admin.profile.edit') }}" class="btn btn-primary"> Edit Profile </a>
                        <a href="" class="btn btn-primary"> Edit Password </a>
                    </div>
                </div>
            </div>
            <div class="tab-content profile-tab-cont">
                <div class="tab-pane fade show active" id="per_details_tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">
                                        <span>Other Details</span>
                                    </h5>
                                    <div class="row mt-5">
                                        <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Name</p>
                                        <p class="col-sm-6">David Alvarez</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                        <p class="col-sm-6">24 Jul 1983</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email ID </p>
                                        <p class="col-sm-6">
                                            <a href="" class="__cf_email__">Email</a>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>
                                        <p class="col-sm-6">305-310-5857</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-sm-right mb-0">Address</p>
                                        <p class="col-sm-6 mb-0">4663 Agriculture Lane, <br> Miami, <br> Florida -
                                            33165, <br> United States. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Personal Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row form-row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" value="John">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" value="Doe">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <div class="cal-icon">
                                                                <input type="text" class="form-control"
                                                                    value="24-07-1983">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Email ID</label>
                                                            <input type="email" class="form-control"
                                                                value="johndoe@example.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Mobile</label>
                                                            <input type="text" value="+1 202-555-0125"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <h5 class="form-title">
                                                            <span>Address</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control"
                                                                value="4663 Agriculture Lane">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" value="Miami">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>State</label>
                                                            <input type="text" class="form-control" value="Florida">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Zip Code</label>
                                                            <input type="text" class="form-control" value="22434">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <input type="text" class="form-control"
                                                                value="United States">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Save
                                                    Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection