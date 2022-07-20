<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContactController extends Controller
{
    public function index(){
        return view('user/contact');
    }
}
