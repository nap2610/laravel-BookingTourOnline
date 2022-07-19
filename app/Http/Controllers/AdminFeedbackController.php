<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Feedback;
use Illuminate\Http\Request;

class AdminFeedbackController extends Controller
{
    public function index(Request $request){
        if($request->from != "" || $request->to != ""){
            $validated = $request->validate([
                'from' => 'required|date',
                'to' => 'required|date'
            ]);
            if($request->to > $request->from){
                $feed = Feedback::where('feedback_date','>=',$request->from)->where('feedback_date','<=',$request->to)->get();
            }else{
                return redirect()->route('admin.feedback')->with('warn','Date From must less than Date To');
            }
        }else{
            $feed = Feedback::all();
        }

        return view('admin/feedback',['feed' => $feed]);
    }

    public function updateFeedback(Request $request){
        $feedback = Feedback::where('feedback_id',$request->id)->get();
        return view('admin.control.updateFeedback')->with('feedback',$feedback);
    }

    public function updateFeedbackPost(Request $request){
        $validated = $request->validate([
            'date' => 'required|date',
            'subject' => 'required',
            'content' => 'required',
            'reply' => 'required',
            'replydate' => 'required|date'   
        ]);

        $feedback = Feedback::find($request->id);

        $feedback->feedback_date = $request->date;
        $feedback->subject = $request->subject;
        $feedback->content = $request->content;
        $feedback->reply = $request->reply;
        $feedback->reply_date = $request->replydate;

        $feedback->save();

        return redirect()->route('admin.feedback')->with('msg','Update successfully !!!');

    }

    public function deleteFeedback(Request $request){
        $feedback = Feedback::find($request->id);
        $feedback->delete();
        return redirect()->route('admin.feedback')->with('msg','Delete successfully !!!');
    }
}
