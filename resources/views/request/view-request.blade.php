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

        <div class="row align-items-center">
            <div class="col">
                <div class="mt-5">
                    <h4 class="card-title float-left mt-2">All Requests</h4>
                    @if(Auth::user()->utype === 'ADM')
                    @else
                    <a href="{{ route('request.add') }}" class="btn btn-primary float-right veiwbutton ">Add Request</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body booking_card">
                    <div class="table-responsive">
                        <table class="datatable table table-stripped table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Name</th>
                                    <th>Product For</th>
                                    <th>Vehicle Model</th>
                                    <th>Vehicle Manufacturing Year</th>
                                    <th>Required Product</th>
                                    <th>Remark</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $requests)
                                <tr>
                                    <td>{{$requests->r_id}}</td>
                                    <td>{{$requests->name}}</td>
                                    <td>{{$requests->p_for}}</td>
                                    <td>{{$requests->v_model}}</td>
                                    <td>{{$requests->v_year}}</td>
                                    <td>{{$requests->req_part}}</td>
                                    <td>{{$requests->textarea}}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fas fa-ellipsis-v ellipse_color"></i>
                                            </a>
                                            <form method="post" action="{{ url('/request/delete/'.$requests->id) }}">
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item"
                                                        href="{{ url('/request/edit-request/'.$requests->id) }}">
                                                        <i class="fas fa-pencil-alt m-r-5"></i> Edit </a>
                                                    @csrf
                                                    <button class="dropdown-item" data-toggle="modal"
                                                        data-target="#delete_asset"><i
                                                            class="fas fa-trash-alt m-r-5"></i> Delete </button>
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
    {{ $data->links("pagination::bootstrap-4") }}
</div>

<script type="text/javascript">
function closeMessage() {
    document.getElementById("mess-age").style.display = " none";
}

window.setTimeout(closeMessage, 3000);
</script>
@endsection