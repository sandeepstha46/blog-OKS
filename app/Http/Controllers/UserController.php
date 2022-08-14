<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function ViewProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('user.view_user', compact('user'));
    }
    public function ProfileEdit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('user.edit_user', compact('editData'));
    }

    public function ProfileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->dob = $request->dob;
        $data->phone = $request->phone;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->gender = $request->gender;
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('images/upload_images/user_images' . $data->profile_photo_path));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/upload_images/user_images'), $filename);
            $data['profile_photo_path'] = $filename;
        }
        if ($data->save()) {
            return redirect('user/profile')->with('success', 'User Profile Updated Successfully');
        } else {
            return redirect('user/profile/edit')->with('error', 'Sorry Some Error Occured');
        }
    }
}