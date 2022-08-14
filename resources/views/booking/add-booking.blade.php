@extends('layouts.app')
@section('body')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title mt-5">Add Booking</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('booking.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="row formtype">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Booking ID</label>
                            <input class="form-control" type="number" name="b_id" placeholder="BKG-0001">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="u_name" placeholder="Your Name"
                                value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" class="form-control" id="usr" name="email" placeholder="Email"
                                value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Booking Type</label>
                            <select class="form-control" id="sel2" name="btype">
                                <option value="0">Select Service</option>
                                <option value="1">Bike Service</option>
                                <option value="2">Car Serivce</option>
                                <option value="3">General Repair</option>
                                <option value="4">Cleaning / Detailing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="p_number" class="form-control" id="usr1"
                                value="{{ $user->phone }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Vehicle Number</label>
                            <input type="number" name="v_number" class="form-control" id="usr1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Extra Message</label>
                            <textarea class="form-control" rows="5" id="comment" name="textarea"
                                placeholder="If you have any enquiry, write here"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Create Booking</button>
            </form>
        </div>
    </div>
</div>

@endsection