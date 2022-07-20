@extends('userlayout')

@section('content')
    <div class="container mt-5">
        <h3 style="color:rgb(36, 75, 111)" class="">EXPLORE TOUR</h3>
    </div>

    <div class="home2">
        <div class="l-container">

            @foreach ($tour as $t)
                <div class="b-game-card">
                    <form action="{{url('user/tour')}}">
                        <input type="hidden" name="name" value="{{$t->tour_name}}">
                        <button>
                            <div class="b-game-card__cover">
                                <img src="{{ url('images/' . $t->img1) }}" alt="">
                                <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                                    <h6 class="card-titl" style="color:white"> {{ $t->tour_name }} </h6>
                                </div>
                            </div>
                        </button>
                    </form>
                </div>
            @endforeach

        </div>
    </div>

    <<div class="container mt-5">
        <h3 style="color:rgb(36, 75, 111)" class="">EXPLORE REGIONS</h3>
        </div>

        <div class="container mt-4 mb-5">
            <div class="row">

                @foreach ($tourB as $t)
                    <div class="col-sm-4 ">
                        <div class="card" style="width:350px">
                            <div class="card-region">
                                <img width="400px" height="200px" class="card-img-top" src="{{ url('images/' . $t->img1) }}"
                                    alt="Card image">
                                <div class="card-body">
                                    <div class="row">
                                        <strong>{{ $t->tour_name }}</strong>
                                    </div>
                                    <div class="row mt-2">
                                        <small>Location start <strong> {{ $t->location_start }}</strong></small>
                                    </div>
                                    <div class="row mt-1">
                                        <small>Duration <strong> {{ $t->duration }} days </strong> <span class="ml-4">
                                                Transport </span> <strong> {{ $t->transport }} </strong> </small>
                                    </div>
                                    <div class="row">
                                        <span>Region : <strong>Northern</strong></span>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-5 mt-1">
                                            <h5><strong class="text-danger">{{ $t->price1 }}.00$</strong></h5>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-5">
                                            <form action="{{ url('user/tour') }}">
                                                <input type="hidden" name="region" value="{{ $t->region }}">
                                                <button class="btn btn-outline-primary">View Detail</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($tourT as $t)
                    <div class="col-sm-4 ">
                        <div class="card" style="width:350px">
                            <div class="card-region">
                                <img width="400px" height="200px" class="card-img-top" src="{{ url('images/' . $t->img1) }}"
                                    alt="Card image">
                                <div class="card-body">
                                    <div class="row">
                                        <strong>{{ $t->tour_name }}</strong>
                                    </div>
                                    <div class="row mt-2">
                                        <small>Location start <strong> {{ $t->location_start }}</strong></small>
                                    </div>
                                    <div class="row mt-1">
                                        <small>Duration <strong> {{ $t->duration }} days </strong> <span class="ml-4">
                                                Transport </span> <strong> {{ $t->transport }} </strong> </small>
                                    </div>
                                    <div class="row">
                                        <span>Region : <strong>Central</strong></span>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-5 mt-1">
                                            <h5><strong class="text-danger">{{ $t->price1 }}.00$</strong></h5>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-5">
                                            <form action="{{ url('user/tour') }}">
                                                <input type="hidden" name="region" value="{{ $t->region }}">
                                                <button class="btn btn-outline-primary">View Detail</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($tourN as $t)
                    <div class="col-sm-4 ">
                        <div class="card" style="width:350px">
                            <div class="card-region">
                                <img width="400px" height="200px" class="card-img-top" src="{{ url('images/' . $t->img1) }}"
                                    alt="Card image">
                                <div class="card-body">
                                    <div class="row">
                                        <strong>{{ $t->tour_name }}</strong>
                                    </div>
                                    <div class="row mt-2">
                                        <small>Location start <strong> {{ $t->location_start }}</strong></small>
                                    </div>
                                    <div class="row mt-1">
                                        <small>Duration <strong> {{ $t->duration }} days </strong> <span class="ml-4">
                                                Transport </span> <strong> {{ $t->transport }} </strong> </small>
                                    </div>
                                    <div class="row">
                                        <span>Region : <strong>South</strong></span>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-5 mt-1">
                                            <h5><strong class="text-danger">{{ $t->price1 }}.00$</strong></h5>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-5">
                                            <form action="{{ url('user/tour') }}">
                                                <input type="hidden" name="region" value="{{ $t->region }}">
                                                <button class="btn btn-outline-primary">View Detail</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>


        <div class="container mt-5 mb-5 pt-5">
            <h3 style="color:rgb(36, 75, 111)" class="">EXPLORE PLACES</h3>
        </div>

        <div class="container mt-3 mb-5">
            <div class="row">
                @foreach ($place as $p)
                    <div class="col-sm-3 card-place">
                        <form action="{{url('user/tour')}}">
                            <input type="hidden" name="end" value="{{$p->location_name}}">
                            <button style="border: none; outline:none" href="" class="ml-4"> <img
                                style="border:5px solid rgba(235, 230, 230, 0.591);border-radius: 10px" width="230px"
                                height="170px" src="{{ url('images/' . $p->img) }}" alt=""> </button>
                        </form>
                        <div class="row">
                            <h4 style="text-align:center"> {{ $p->location_name }} </h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container mt-5 mb-3 pt-5">
            <h3 style="color:rgb(36, 75, 111)" class="">HOT NEWS TOUR VIET</h3>
        </div>

        <div class="container mt-3 mb-5 news-block">
           @foreach ($news as $n)
           <div class="row mb-4 card-news">
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <a href="newsdetail/{{$n->news_id}}"> <img width="300px" src="{{url('images/'.$n->img1)}}" alt=""> </a>
            </div>
            <div class="col-sm-7 card-title">
                <h4 class="text-danger">
                    <a style="text-decoration: none" href="newsdetail/{{$n->news_id}}">{{$n->news_name}}</a>
                </h4>
                <small>{{$n->newstitle}}</small>
            </div>
            <div class="col-sm-1"></div>
        </div>
           @endforeach
        </div>

    @endsection

    @section('title')
        Home
    @endsection

    @section('linkcss')
        {{ asset('css/user/home.css') }}
    @endsection

    @section('linkjs')
        {{ asset('js/user/home.js') }}
    @endsection
