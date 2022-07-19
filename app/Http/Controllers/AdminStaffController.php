<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class AdminStaffController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        if($search != ""){
           $staff = Admin::where('name','like',"%$search%")->where('role','0')->get();
        }else{
            $staff = Admin::where('role','0')->get();
        }

        return view('admin/staff',['staff' => $staff]);
    }

    public function updateStaff(Request $request){
        $staff = Admin::where('id',$request->id)->get();
        return view('admin.control.updateStaff')->with('staff',$staff);
    }

    public function updateStaffPost(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'pass' => 'required|min:6',
            'role' => 'required'
        ],[
            'required' => ':attribute must be required',
            'min' => ':attribute must great than :min'
        ]);

        $admin = Admin::find($request->id);

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->pass;
        $admin->role = $request->role;

        $admin->save();

        return redirect()->route('admin.staff')->with('msg','Update successfully');
    }

    public function deleteStaff(Request $request){
        $admin = Admin::find($request->id);
        $admin->delete();
        return redirect()->route('admin.staff')->with('msg','Delete successfully');
    }
}
