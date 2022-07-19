@extends('adminlayout')

@section('content')
    
<div class="content">
    <div class="one">
        <div class="search-name">
            <span>Search name for here</span>
            <form action="order">
                <input type="text" name="search">
                <button>Search</button>
            </form>
        </div>
        <div class="search-date">
            <span>Search date for here</span>
            <form action="order">
                From <input type="date" name="from">
                To <input type="date" name="to">
                <button>Search</button>
            </form>
        </div>
    </div>
    @if ($errors->any())
    <div style="color: red;width:100%;margin-left:50%"> Input is wrong, please try again ! </div>
    @endif
    @isset($msg)
    <h4 style="color:red;width:100%;margin-left:50%">{{$msg}}</h4>
    @endisset
    @if (session('msg'))
    <div class="msg-block">
        <span class="msg">{{ session('msg') }}</span>
    </div>
    @endif
    <div class="table-content">
        <table class="container">
            <thead>
                <tr>
                    <th>
                        <h1>Schedule id</h1>
                    </th>
                    <th>
                        <h1>Tour code</h1>
                    </th>
                    <th>
                        <h1>Name</h1>
                    </th>
                    <th>
                        <h1>Email</h1>
                    </th>
                    <th>
                        <h1>Date book</h1>
                    </th>
                    <th>
                        <h1>Amount</h1>
                    </th>
                    <th>
                        <h1>Payment</h1>
                    </th>
                    <th>
                        <h1>Status</h1>
                    </th>
                    <th>
                        <h1>Control</h1>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($order as $o)
                <tr>
                    <td data-label="Schedule id">{{$o->schedule_id}}</td>
                    <td data-label="Schedule id">{{$o->tour_code}}</td>
                    <td data-label="Schedule id">{{$o->user_name}}</td>
                    <td data-label="Email">{{$o->email}}</td>
                    @php
                    $d=strtotime($o->date_book);
                    @endphp
                    <td data-label="Date book">{{date("d-m-Y H:i", $d)}}</td>
                    <td data-label="Amount">{{$o->amount}}$</td>
                    <td data-label="Payment">{{$o->payment}}</td>
                    <td data-label="Payment">{{$o->status}}</td>
                    <td data-label="Control">
                        <div>
                            <a href="control/updateOrder/{{$o->book_id}}"><button>Update</button></a>
                            <a href="control/deleteOrder/{{$o->book_id}}"><button>Delete</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@section('title')
   Order
@endsection

@endsection

@section('linkcss')
    {{asset('css/admin/order.css')}}
@endsection

@section('linkjs')

@endsection