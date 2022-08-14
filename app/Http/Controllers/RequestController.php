<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function ViewRequest()
    {
        if (Auth::user()->utype === 'ADM') {
            $data = Requests::orderBy('id', 'asc')->where('status', '>', 0)->paginate(5);
            return view('request.view-request', compact('data'));
        } else {
            $data = Requests::orderBy('id', 'asc')->whereUId(Auth::id())->where('status', '>', 0)->paginate(5);
            return view('request.view-request', compact('data'));
        }
    }

    public function AddRequest()
    {
        return view('request.add-request');
    }

    public function NewRequest(Request $request)
    {
        $data = new Requests;
        $data->r_id = $request->r_id;
        $data->name = $request->name;
        $data->p_for = $request->p_for;
        $data->v_model = $request->v_model;
        $data->v_year = $request->v_year;
        $data->req_part = $request->req_part;
        $data->textarea = $request->textarea;
        $data->u_id = Auth::user()->id;

        if ($data->save()) {
            return redirect('request/view')->with('success', 'New Request Added Successful');
        } else {
            return redirect('request/view')->with('errors', 'Some Error Occured');
        }
    }

    public function EditRequest($id)
    {
        $editData = Requests::where('id', $id)->first();
        return view('request.edit-request', compact('editData'));
    }

    public function UpdateRequest(Request $request, $id)
    {
        $editData = Requests::findOrFail($id);
        $editData->r_id = $request->r_id;
        $editData->name = $request->name;
        $editData->p_for = $request->p_for;
        $editData->v_model = $request->v_model;
        $editData->v_year = $request->v_year;
        $editData->req_part = $request->req_part;
        $editData->textarea = $request->textarea;

        if ($editData->save()) {
            return redirect('request/view')->with('success', 'Request Updated Successfully');
        } else {
            return redirect('request/edit')->with('errors', 'Some error occured');
        }
    }

    public function DeleteRequest($id)
    {
        $data = Requests::findOrFail($id);
        $data->status = 0;
        $result = $data->save();

        $data = Requests::orderBy('id', 'asc')->where('status', 1)->get();
        if ($result) {
            return redirect('request/view')->with('success', 'Request Deleted Successfully');
        } else {
            return redirect('request/edit')->with('errors', ' Sorry Some Error Occured');
        }
    }
}