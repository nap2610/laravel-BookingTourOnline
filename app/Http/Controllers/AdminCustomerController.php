<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        if($search != ""){
            $customer = Users::where('user_name','like',"%$search%")->get();
        }else{
            $customer = Users::all();
        }

        return view('admin/customer',['customer' => $customer]);
    }

    public function updateCustomer(Request $request){
        $user = Users::where('user_id',$request->id)->get();
        return view('admin.control.updateCustomer')->with('user',$user);
    }

    public function updateCustomerPost(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'pass' => 'required|min:6',
            'phone' => 'required|min:9|numeric',
            'address' => 'required'
        ],[
            'required' => ':attribute must be required',
            'min' => ':attribute must great than :min'
        ]);

        $user = Users::find($request->id);

        $user->user_name = $request->name;
        $user->email = $request->email;
        $user->password = $request->pass;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->active = $request->active;
        $user->save();

        return redirect()->route('admin.customer')->with('msg','Update Successfully');
    }

    public function deleteCustomer(Request $request){
        $user = Users::find($request->id);
        $user->delete();
        return redirect()->route('admin.customer')->with('msg','Delete Successfully');
    }
}
