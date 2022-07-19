<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourGuide;
use Illuminate\Http\Request;

class AdminTourguideController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        if($search != ""){
            $guide = TourGuide::where('name','like',"%$search%")->get();
        }else{
            $guide = TourGuide::all();
        }

        return view('admin/tour_guide',['guide' => $guide]);
    }

    public function insertGuide(){
        return view('admin.control.insertGuide');
    }

    public function insertGuidePost(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tour_guide,email',
            'gender' => 'required',
            'phone' => 'required|numeric|min:9'      
        ],[
            'required' => ':attribute must be required',
            'min' => ':attribute must great than :min'
        ]);

        $guide = new TourGuide();

        $guide->name = $request->name;
        $guide->email = $request->email;
        $guide->gender = $request->gender;
        $guide->phone = $request->phone;

        $guide->save();

        return redirect()->route('admin.tourguide')->with('msg','Insert successfully');

    }

    public function updateGuide(Request $request){
        $guide = TourGuide::where('tour_guide_id',$request->id)->get();
        return view('admin.control.updateGuide')->with('guide',$guide);
    }

    public function updateGuidePost(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'phone' => 'required|numeric|min:9'      
        ],[
            'required' => ':attribute must be required',
            'min' => ':attribute must great than :min'
        ]);

        $guide = TourGuide::find($request->id);

        $guide->name = $request->name;
        $guide->email = $request->email;
        $guide->gender = $request->gender;
        $guide->phone = $request->phone;

        $guide->save();

        return redirect()->route('admin.tourguide')->with('msg','Update successfully');
    }

    public function deleteGuide(Request $request){
        $guide = TourGuide::find($request->id);
        $guide->delete();
        return redirect()->route('admin.tourguide')->with('msg','Delete successfully');
    }
}
