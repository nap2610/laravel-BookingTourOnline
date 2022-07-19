@extends('userlayout')

@section('content')
    @foreach ($data as $d)
        <div class="container mt-5 mb-5 p-4 tour-info">

            <div class="row mb-3">
                <div class="col-sm-6">
                    <span class="text-primary"><strong style="font-size:20px">Code : </strong>{{ $d->tour_code }}</span>
                    <h3 style="font-weight: bold">{{ $d->tour->tour_name }}</h3>
                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-sm-2 mt-4">
                    <small style="font-size: 25px;font-weight:bold"
                        class="text-danger">{{ $d->tour->price1 }}.00$</small>/guess
                </div>
                <div class="col-sm-2 mt-1">
                    <a href="{{ url('user/payment/$d->schedule_id') }}"><button class="btn btn-lg btn-danger mt-3"><small
                                class="px-1">Book now</small></button></a>
                    <a href="{{ url('user/contact') }}"><button class="btn btn-lg btn-outline-primary mt-1"><small
                                class="px-3"> Contact</small></button></a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7">
                    <a href=""><img height="500px" style="border:1px solid rgba(0, 0, 0, 0);border-radius:15px"
                            src="{{ asset('images/' . $d->tour->img2) }}" alt=""></a>
                </div>
                <div class="col-sm-5">
                    <div class="row mb-4">
                        <div class="col-sm-6"><a href=""><img height="170px"
                                    style="border:1px solid rgba(0, 0, 0, 0);border-radius:15px"
                                    src="{{ asset('images/' . $d->tour->img3) }}" alt=""></a></div>
                        <div class="col-sm-6"><a href=""><img height="170px"
                                    style="border:1px solid rgba(0, 0, 0, 0);border-radius:15px"
                                    src="{{ asset('images/' . $d->tour->img4) }}" alt=""></a></div>
                    </div>
                    <div class="row">
                        <a href=""><img height="300px" style="border:1px solid rgba(0, 0, 0, 0);border-radius:15px"
                                width="" src="{{ asset('images/' . $d->tour->img5) }}" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-5">
                    <textarea style="border: none;outline:none;font-size:17px;background-color:aliceblue" cols="55" rows="4"
                        id="comment" name="text">{{ $d->tour->detail }}</textarea>

                    <div class="mt-3"
                        style="padding: 1rem;border:1px solid rgba(0, 0, 0, 0);border-radius:15px;background-color:rgb(255, 255, 255)">
                        @php
                            $date = strtotime($d->date_start);
                        @endphp
                        <small class="mt-2">Date start </small> <strong>{{ date('d-m-Y H:i', $date) }}</strong><br>
                        <small class="mt-2">Duration </small> <strong>{{ $d->tour->duration }} days</strong><br>
                        <small class="mt-2">Location Start </small> <strong>{{ $d->tour->location_start }}</strong><br>
                        <small class="mt-2">Destination </small> <strong>{{ $d->tour->place }}</strong>
                    </div>
                </div>



                <div style="padding: .5rem;border:1px solid rgba(0, 0, 0, 0);border-radius:15px;background-color:rgb(255, 255, 255)"
                    class="col-sm-7 mt-2">
                    <div class="row ml-2">
                        <div class="col-sm-3">
                            <strong class="text-danger">Duration</strong><br>
                            <h6>{{ $d->tour->duration }} days</h6>
                        </div>
                        <div class="col-sm-3">
                            <strong class="text-danger">Transport</strong><br>
                            <h6>{{ $d->tour->transport }}</h6>
                        </div>
                        <div class="col-sm-3">
                            <strong class="text-danger">Visit</strong><br>
                            <h6>5 outdoor attractions, 2 indoor attractions</h6>
                        </div>
                        <div class="col-sm-3">
                            <strong class="text-danger">Food</strong><br>
                            <h6>According to the menu</h6>
                        </div>

                    </div>
                    <div class="row mt-5 ml-2">
                        <div class="col-sm-3">
                            <strong class="text-danger">Hotel</strong><br>
                            <h6>4 stars</h6>
                        </div>
                        <div class="col-sm-3">
                            <strong class="text-danger">Ideal time</strong><br>
                            <h6>Year round</h6>
                        </div>
                        <div class="col-sm-3">
                            <strong class="text-danger">Suitable object</strong><br>
                            <h6>Everybody</h6>
                        </div>
                        <div class="col-sm-3">
                            <strong class="text-danger">Tour Guide</strong><br>
                            <h6>{{ $d->tour_guide->name }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h4 style="font-weight:bold;margin-left:45%">Feedback </h4>
        </div>

        <div class="container mt-5 mb-5">
            @foreach ($feedback as $f)
                <div class="row ">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 p-4"
                        style="background-color:antiquewhite;boder:1px solid rgba(0, 0, 0, 0);border-radius:10px">

                        @php
                            $reply = strtotime($f->reply_date);
                            $feedback = strtotime($f->feedback_date);
                        @endphp

                        <strong class="text-primary">{{ $f->user->user_name }}</strong><small class="ml-2">
                            {{ date('d-m-Y H:i', $feedback) }}</small>
                        <div class="row mt-2">
                            <h6> <strong>{{ $f->subject }}: </strong> {{ $f->content }}</h6>
                        </div>

                        <div class="div mt-2 ml-5">
                            <strong class="text-danger">Staff </strong><small class="ml-2">
                                {{ date('d-m-Y H:i', $reply) }}</small>
                            <div class="row">
                                <h6 class="mt-1"> {{ $f->reply }} </h6>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-1"></div>
                </div>
            @endforeach
        </div>

        @if (session('userName'))
            <div class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <strong class="text-primary">{{ session('userName') }} (me)</strong>
                        <form action="{{url('user/tour/detailtour/feedback')}}">
                            <strong>Title</strong> <input class="form-control" type="text" name="subject" >
                            <strong>Feedback</strong> <textarea rows="4" class="form-control" type="text" name="content" ></textarea>
                            <button class="btn btn-danger mt-2">POST</button>
                        </form>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        @endif

        <h3 style="margin-left:45%" class="my-5"><strong>Schedule</strong></h3>

        <div class="container tour-sche">
            <div class="row">
                <div class="col-sm-4 bg-light pt-4 pl-4 pb-5">
                    <div class="row">
                        <div class="col-sm-8"><strong>Type of guest</strong></div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3"><strong>Tour price</strong></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-8">
                            <h6>Adults (From 12 years old and up)</h6>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <h6 style="font-weight: bold" class="text-danger">{{ $d->tour->price1 }}.00 $</h6>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-8">
                            <h6>Children (From 5 to 11 years old)</h6>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <h6 style="font-weight: bold" class="text-danger">{{ $d->tour->price2 }}.00 $</h6>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-8">
                            <h6>Young children (2 - 4 years old)</h6>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <h6 style="font-weight: bold" class="text-danger">{{ $d->tour->price3 }}.00 $</h6>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-8">
                            <h6>Baby (under 2 years old)</h6>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <h6 style="font-weight: bold" class="text-danger">{{ $d->tour->price4 }}.00 $</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <h5 class="p-4" style="background-color:aliceblue">
                        {{ $d->tour->visit }}
                    </h5>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('title')
    Tour Detail
@endsection

@section('linkcss')
    {{ asset('css/user/tourdetail.css') }}
@endsection

@section('linkjs')
@endsection
