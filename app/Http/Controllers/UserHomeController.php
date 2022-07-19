<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index(Request $request){
        return view('user.home');
    }
}
