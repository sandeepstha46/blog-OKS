@extends('layouts.app')
@section('body')

<div class="content container-fluid">
    <div class="page-header mt-5">
        @if (session('error'))
        <div id="mess-age">
            <p class="alert alert-danger">{{ session('errors') }}</p>
        </div>
        @endif

        @if (session('success'))
        <div id="mess-age">
            <p class="alert alert-success">{{ session('success') }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col">
                <h3 class="page-title">Profile</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
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
                                src="{{ (!empty($user->profile_photo_path))? url('images/upload_images/user_images/'.$user->profile_photo_path): url('images/upload_images/no_avatar.png') }}">
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
                        <a href="{{ route('user.profile.edit') }}" class="btn btn-primary"> Edit Profile </a>
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
                                        <span>Personal Details</span>
                                        <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i
                                                class="fa fa-edit mr-1"></i>Edit</a>
                                    </h5>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                        <p class="col-sm-6">{{ $user->dob }}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Phone</p>
                                        <p class="col-sm-6">{{ $user->Phone }}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>
                                        <p class="col-sm-6">{{ $user->Mobile }}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-sm-right mb-0">Address</p>
                                        <p class="col-sm-6 mb-0">{{ $user->address }}</p>
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
                                                @csrf
                                                <div class="row form-row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <div class="cal-icon">
                                                                <input type="text" class="form-control" name="dob"
                                                                    value="{{ $user->dob }}" require>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" name="phone" class="form-control"
                                                                value="{{ $user->phone }}" require>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Mobile</label>
                                                            <input type="text" value="{{ $user->mobile }}" name="mobile"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <div id="input-type">
                                                                <input type="radio" id="male" name="gender"
                                                                    class="form-control"
                                                                    style="width: 15px;  margin-right: 5px">
                                                                <label
                                                                    style="align-items: end; display: flex; margin-right: 10px">Male</label>
                                                                <input type="radio" id="female" name="gender"
                                                                    class="form-control"
                                                                    style="width: 15px;  margin-right: 5px">
                                                                <label
                                                                    style="align-items: end; display: flex;">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" name="address" class="form-control"
                                                                value="{{ $user->address }}" require>
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

<script type="text/javascript">
function closeMessage() {
    document.getElementById("mess-age").style.display = " none";
}

window.setTimeout(closeMessage, 3000);
</script>

@endsection