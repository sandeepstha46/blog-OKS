@extends('layouts.app')
@section('body')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title mt-5">Edit Product</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ url ('product/edit-product/'.$product->id) }}">
                @csrf
                <div class="row formtype">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Product ID</label>
                            <input class="form-control" type="number" name="p_id" value="{{ $product->p_id }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" id="usr" name="p_number"
                                value="{{ $product->p_number }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" name="car_model" class="form-control" id="usr1"
                                value="{{ $product->car_model }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Manufacturing Year</label>
                            <input type="number" name="car_year" class="form-control" id="usr1"
                                value="{{ $product->car_year }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Request part</label>
                            <input type="text" name="req_part" class="form-control" id="usr1"
                                value="{{ $product->req_part }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Extra Message</label>
                            <textarea class="form-control" rows="5" id="comment" name="textarea"
                                value="{{ $product->textarea }}"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Update Booking</button>
            </form>
        </div>
    </div>
</div>

@endsection