<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use App\Models\Tour;
use App\Models\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(Request $request){
        $booking =  Booking::where('user_id',session()->get('id'))->get();
        return view('user.profile',['order' => $booking]);
        
    }

    public function saveProfile(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:9|numeric',
            'address' => 'required'
        ],[
            'required' => ':attribute must be required',
            'min' => ':attribute must great than :min',
        ]);     
            $user = Users::find(session()->get('id'));
            $user->user_name = $request->name;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->save();

            session(['userName' => $request->name]);
            session(['userEmail' => $request->email]);
            session(['userPhone' => $request->phone]);
            session(['userAddress' => $request->address]);

            return redirect()->route('user.profile')->with('msg','Update successfully');
        
    }

    public function logout(Request $request){
        session()->flush();
        return redirect()->route('user.home');
    }
}
