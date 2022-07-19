<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use Illuminate\Http\Request;

class UserPaymentContronller extends Controller
{
    public function index(Request $request){
        $data = Schedule::where('schedule_id',$request->scheid)->get();
        return view('user.payment')->with('data',$data);
    }
}
