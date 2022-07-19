@extends('adminlayout')

@section('content')
    
<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search Tour for here</span>
            <form action="">
                From <input type="date" name="from">
                To <input type="date" name="to">
                <button>Search</i></button>
            </form>
        </div>
        <div class="insert">
            <form action="control/insertSchedule">
                <button>Insert</button>
            </form>
        </div>
    </div>
    @if ($errors->any())
    <div style="color: red;width:100%;"> Input is wrong, please try again ! </div>
    @endif

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
                        <h1>Tour id</h1>
                    </th>
                    <th>
                        <h1>Tour code</h1>
                    </th>
                    <th>
                        <h1>Date start</h1>
                    </th>
                    <th>
                        <h1>Date end</h1>
                    </th>
                    <th>
                        <h1>Tour guide id</h1>
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
                @foreach ($schedule as $sche)
                <tr>
                    <td data-label="Name">{{$sche->schedule_id}}</td>
                    <td data-label="Name">{{$sche->tour_id}}</td>
                    <td data-label="Duration">{{$sche->tour_code}}</td>
                    @php
                    $start=strtotime($sche->date_start);
                    $end=strtotime($sche->date_end);
                    @endphp
                    <td data-label="Code">{{date("d-m-Y H:i",$start)}}</td>
                    <td data-label="Price">{{date("d-m-Y H:i",$end)}}</td>
                    <td data-label="Price">{{$sche->tour_guide_id}}</td>
                    <td data-label="Price">{{$sche->status}}</td>
                    <td data-label="Control">
                        <div>
                            <a href="control/updateSchedule/{{$sche->schedule_id}}"><button>Update</button></a>
                            <a href="control/deleteSchedule/{{$sche->schedule_id}}"><button>Delete</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection

@section('title')
    Tour Schedule
@endsection

@section('linkcss')
    {{asset('css/admin/schedule.css')}}
@endsection

@section('linkjs')

@endsection

