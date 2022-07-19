<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;


class UserTourdetailController extends Controller
{
    public function index($schedule_id){
        // $data = DB::table('tour')
        // ->join('schedule','tour.tour_id','=','schedule.tour_id')
        // ->join('tour_guide','schedule.tour_guide_id','=','tour_guide.tour_guide_id')
        // ->select('tour.*','schedule.date_start','schedule.tour_code','schedule.date_end','tour_guide.name','schedule.schedule_id')
        // ->where('tour.tour_id',$request->tourid)
        // ->where('schedule.schedule_id',$request->scheid)->get();


        $data = Schedule::where('schedule_id', $schedule_id)->get();
        $feedback = Feedback::where('schedule_id',$schedule_id)->get();


        return view('user.tourdetail',['data'=>$data,'feedback'=>$feedback]);
    }

    public function feedback(Request $request){

    }
}
