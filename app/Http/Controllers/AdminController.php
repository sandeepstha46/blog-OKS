<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function ViewCustomers(Request $request)
    {
        $data = User::orderBy('id', 'asc')->where('status', '>', 1)->paginate(5);
        return view('customers/view_customers', compact('data'));
    }

    public function EditCustomers($id)
    {
        $customers = User::where('id', $id)->first();
        return view('customers/edit_customers', compact('customers'));
    }

    public function UpdateCustomers(Request $request, $id)
    {
        $customers = User::findOrFail($id);
        $customers->id = $request->id;
        $customers->name = $request->name;
        $customers->email = $request->email;
        $customers->password = Hash::make(12345678);
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('images/upload_images/user_images' . $customers->profile_photo_path));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/upload_images/user_images'), $filename);
            $customers['profile_photo_path'] = $filename;
        }

        if ($customers->save()) {
            return redirect('customers/view')->with('success', 'Customers Data Updated Successfully');;
        } else {
            return redirect('customers/edit_customers')->with('errors', ' Sorry Some Error Occured');
        }
    }

    public function DeleteCustomers($id)
    {
        $data = User::findOrFail($id);
        $data->status = 1;
        $result = $data->save();

        $data = User::orderBy('id', 'asc')->where('status', '>', 1)->get();
        if ($result) {
            return redirect('customers/view_customers')->with('success', 'Customers Data Updated Successfully');;
        } else {
            return redirect('customers/edit_customer')->with('errors', ' Sorry Some Error Occured');
        }
    }
}