@extends('userlayout')

@section('content')
      <div class="body-container">

        <div class="container pt-5">
          <a href="home"><button class="btn btn-lg btn-info"><i class="fa-solid fa-angles-left"></i> Return Home</button></a>
        </div>
  
      <div class="body-profile container mt-5 mb-5">
          @if (session('msg'))
              <h4 style="text-align: center" class="alert alert-success ">{{session('msg')}}</h4>
          @endif
  
          <div class="info mt-5 mb-5">
            <h2 class="text-primary mb-3">User Profile</h2>
            <form action="saveProfile">
                <div class="mb-3 mt-3">
                  <label>ID:</label>
                  <input class="form-control" placeholder="Enter id" name="id" value="{{ session()->get('id') }}" readonly>
                </div>
                  <div class="mt-3 ">
                    <label>Name:</label>
                    <input class="form-control" placeholder="Enter name" name="name" value="{{ session()->get('userName') }}">
                  </div>
                  @error('name')
                      <small style="color: red">{{$message}}</small>
                  @enderror
                  <div class="mt-3">
                    <label>Email:</label>
                    <input class="form-control" placeholder="Enter email" name="email" value="{{ session()->get('userEmail') }}">
                  </div>
                  @error('email')
                  <small style="color: red">{{$message}}</small>
                  @enderror
                  <div class="mt-3">
                    <label>Address:</label>
                    <input class="form-control" placeholder="Enter address" name="address" value="{{ session()->get('userAddress') }}">
                  </div>
                  @error('address')
                  <small style="color: red">{{$message}}</small>
                  @enderror
                  <div class="mt-3">
                    <label>Phone:</label>
                    <input class="form-control" placeholder="Enter phone" name="phone" value="{{ session()->get('userPhone') }}">
                  </div>
                  @error('phone')
                  <small style="color: red">{{$message}}</small>
                  @enderror
                  <br>
                  <button style="width: 10%;" class="btn btn-lg btn-info ">Save</button>
            </form>
        </div>
  
      </div>
  
      <div class="order mb-5 container mt-5">
        <h3 class="text-primary mb-5">History Order</h3>
        @foreach ($order as $or)
            <h4><span>Tour name : </span>{{$or->tour_name}}</h4>
            <h4><span>Tour guide name : </span>{{$or->tour_guide_name}}</h4>
            <h4><span>Payment : </span>{{$or->payment}}</h4>
            <h4><span>Amount : </span>{{$or->amount}}$</h4>
            @php
            $book=strtotime($or->date_book);
            $start=strtotime($or->date_start);
            $end=strtotime($or->date_end);
            @endphp
            <h4><span>Date book : </span>{{date("d-m-Y H:i",$book)}}</h4>
            <h4><span>Location start : </span>{{$or->location_start}}</h4>
            <h4><span>Date start : </span>{{date("d-m-Y H:i",$start)}}</h4>
            <h4><span>Date End : </span>{{date("d-m-Y H:i",$end)}}</h4>
            <h4><span>Transport : </span>{{$or->transport}}</h4>
            <h4><span>Duration : </span>{{$or->duration}} Day</h4>
            <h4><span>Tour code : </span>{{$or->tour_code}}</h4>
            <h4><span>Status : </span>{{$or->status}}</h4>  
            <br>
            <br>
        @endforeach
    </div>
  
    <div class="container feedback mt-5 mb-5">
      <h3 class="text-primary mb-5">History Feedback</h3>
    </div>

      </div>
@endsection

@section('title')
    Profile
@endsection

@section('linkcss')
    {{asset('css/user/profile.css')}}
@endsection

@section('linkjs')
    
@endsection