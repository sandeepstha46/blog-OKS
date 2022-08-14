@extends('layouts.app')
@section('body')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title mt-5">Add Product</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('product.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="row formtype">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Product ID</label>
                            <input class="form-control" type="number" name="p_id" placeholder="BKG-0001">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" id="usr" name="p_number" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" name="car_model" class="form-control" id="usr1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Manufacturing Year</label>
                            <input type="number" name="car_year" class="form-control" id="usr1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Request part</label>
                            <input type="text" name="req_part" class="form-control" id="usr1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Extra Message</label>
                            <textarea class="form-control" rows="5" id="comment" name="textarea" placeholder="If you have any enquiry, write here"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Create Product</button>
            </form>
        </div>
    </div>
</div>

@endsection