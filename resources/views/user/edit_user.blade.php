@extends('layouts.app')
@section('body')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title mt-5">Edit Profile</h3>
            </div>
        </div>
    </div>
    <div class="box inform_css">
        <div class="back-to-profile">
            <p><a class="back" href="{{ route('user.profile') }}">🡠 Back</a></p>
        </div>
        <p class="card-title title_menu" style="padding-left:30px;">Basic Informations</p>
        <div class="row">
            <div class="col-lg-12 column-12">
                <form method="post" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="{{ $editData->name }}" id="exampleInputName" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="{{ $editData->email }}" id="exampleInputEmail1" required />
                            </div>
                        </div>
                    </div>
                    <div class="row formtype">
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="showImage" src="{{ (!empty($editData->profile_photo_path))? url('images/upload_images/user_images/'.$editData->profile_photo_path): url('images/upload_images/no_avatar.png') }}" alt="" width="100" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" name="profile_photo_path" type="file" id="image" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary buttonedit mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>

@endsection