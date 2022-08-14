@extends('layouts.app')
@section('body')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title mt-5">Edit Request</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ url ('request/edit-request/'.$editData->id) }}">
                @csrf
                <div class="row formtype">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Request ID</label>
                            <input class="form-control" type="number" name="r_id" placeholder="{{ $editData->r_id }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" placeholder="{{ $editData->name }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Product For</label>
                            <select class="form-control" id="sel2" name="p_for">
                                <option value="Bike">Bike</option>
                                <option value="Car">Car</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Vehicle Model</label>
                            <input type="text" name="v_model" class="form-control" id="usr1" placeholder="{{ $editData->v_model }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Vehicle Manufacturing Year</label>
                            <input type="date" name="v_year" class="form-control" id="usr1" placeholder="{{ $editData->v_year }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Request part</label>
                            <input type="text" name="req_part" class="form-control" id="usr1" placeholder="{{ $editData->req_part }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Remarks</label>
                            <textarea class="form-control" rows="5" id="comment" name="textarea" placeholder="{{ $editData->textarea }}"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Update Request</button>
            </form>
        </div>
    </div>
</div>

@endsection