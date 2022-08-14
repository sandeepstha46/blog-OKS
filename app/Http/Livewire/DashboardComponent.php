<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Requests;
use App\Models\Bookings;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardComponent extends Component
{
    public function render(Request $request)
    {
        if (Auth::user()->utype === 'ADM') {
            $user = User::all()->where('status', '>', 1);
            $data = Bookings::orderBy('id')->where('status', '>', 0)->paginate(2);
            $product = Products::orderBy('id')->where('status', '>', 0)->paginate(3);
            $daall = Bookings::all()->where('status', '>', 0);
            $req = Requests::all()->where('status', '>', 0);
            return view('dashboard', compact('data', 'product', 'daall', 'user', 'req'));
        } else {
            $data = Bookings::orderBy('id')->whereUId(Auth::id())->where('status', '>', 0)->paginate(2);
            $product = Products::orderBy('id')->where('status', '>', 0)->paginate(2);
            $daall = Bookings::all()->where('status', '>', 0);
            return view('dashboard', compact('data', 'product', 'daall'));
        }
    }
}