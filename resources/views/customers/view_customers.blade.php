@extends('layouts.app')
@section('body')
<div class="content container-fluid">
    <div class="page-header">
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
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body booking_card">
                    <div class="table-responsive">
                        <table class="datatable table table-stripped table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Profile Image</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $user)
                                <tr>
                                    <td>{{ $user -> id }}</td>
                                    <td>{{ $user -> name }}</td>
                                    <td>{{ $user -> email }}</td>
                                    <td>{{ $user -> password }}</td>
                                    <td><img class="rounded-circle" alt="User Image" src="{{ (!empty($user->profile_photo_path))? url('images/upload_images/user_images/'.$user->profile_photo_path): url('images/upload_images/no_avatar.png') }}" width="40"></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v ellipse_color"></i>
                                            </a>
                                            <form method="post" action="{{ url('customers/delete/'. $user->id) }}">
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ url('customers/edit_customers/'. $user->id) }}">
                                                        <i class="fas fa-pencil-alt m-r-5"></i> Edit </a>
                                                    @csrf
                                                    <button class="dropdown-item" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete </button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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