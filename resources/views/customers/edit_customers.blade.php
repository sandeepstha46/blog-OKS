@extends('layouts.app')
@section('body')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title mt-5">Edit User</h3>
            </div>
        </div>
    </div>
    <div class="box inform_css">
        <div class="back-to-profile">
            <p><a class="back" href="{{ url ('customers/edit_customers/'.$customers->id) }}">🡠 Back</a></p>
        </div>
        <div class="row">
            <div class="col-lg-12 column-12">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="{{ $customers->name }}" id="exampleInputName" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="{{ $customers->email }}" id="exampleInputEmail1" required />
                            </div>
                        </div>
                    </div>
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="{{ $customers->password }}" id="exampleInputEmail1" required />
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="showImage" src="{{ (!empty($customers->profile_photo_path))? url('images/upload_images/user_images/'.$customers->profile_photo_path): url('images/upload_images/no_avatar.png') }}" alt="" width="100" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" name="profile_path_url" type="file" id="image" required>
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