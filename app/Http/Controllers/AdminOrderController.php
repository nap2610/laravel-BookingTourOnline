<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminOrderController extends Controller
{
    public function index(Request $request){
        
        if($request->search != ""){
            $order = Booking::where('user_name','like',"%$request->search%")->get();
        }
        else if($request->from != "" || $request->to != ""){
            $validated = $request->validate([
                'from' => 'required|date',
                'to' => 'required|date'
            ]);
            $current = new Carbon();
            if( $request->to > $request->from){
                $order = Booking::where('date_book','>=',$request->from)->where('date_book','<=',$request->to)->get();
            }else{ 
                $a = $current->format('d-m-Y');
                $msg = 'Date To must great than Date From'; 
                $order = Booking::all();
                return view('admin/order',['order' => $order])->with('msg',$msg);
            }
        }
        else{
            $order = Booking::all();
        }

        return view('admin/order',['order' => $order]);
    }

    public function updateOrder(Request $request){
        $order = Booking::where('book_id',$request->id)->get();
        return view('admin.control.updateOrder')->with('order',$order);
    }

    public function updateOrderPost(Request $request){
        $validated = $request->validate([
            'user_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'payment' => 'required',
            'person1' => 'required|numeric',
            'person2' => 'required|numeric',
            'person3' => 'required|numeric',
            'person4' => 'required|numeric',
            'amount' => 'required|numeric',
            'schedule_id' => 'required|exists:schedule,schedule_id',
            'date_book' => 'required|date',
            'location_start' => 'required',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
            'transport' => 'required',
            'duration' => 'required|numeric',
            'status' => 'required',
            'tour_code' => 'required|exists:schedule,tour_code'
        ],[
            'required' => ':attribute is required',
        ]);

        $order = Booking::find($request->id);
        $order->user_name = $request->user_name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->payment = $request->payment;
        $order->person1 = $request->person1;
        $order->person2 = $request->person2;
        $order->person3 = $request->person3;
        $order->person4 = $request->person4;
        $order->amount = $request->amount;
        $order->date_book = $request->date_book;
        $order->schedule_id = $request->schedule_id;
        $order->location_start = $request->location_start;
        $order->date_start = $request->date_start;
        $order->date_end = $request->date_end;
        $order->transport = $request->transport;
        $order->duration = $request->duration;
        $order->status = $request->status;
        $order->tour_code = $request->tour_code;

        $order->save();

         return redirect()->route('admin.order')->with('msg','Update successfully !!!');
    }

    public function deleteOrder(Request $request){
        $order = Booking::find($request->id);
        $order->delete();
        return redirect()->route('admin.order')->with('msg','Delete successfully !!!');
    }
}
