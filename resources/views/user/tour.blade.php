@extends('userlayout')

@section('content')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-sm-3 filter mt-5">
                <div class="row mb-5 mt-3">
                    <h4 style="text-align:center" class="text-primary"><strong>Result Filter</strong></h4>
                </div>
                <div class="row mb-1"> <strong>POINT</strong> </div>

                <div class="row mb-3">
                    <div class="col-sm-8">
                        <select class="form-select" form="start" name="start">
                            <option  hidden> Select Point</option>
                            @foreach ($start as $s)
                                <option value="{{ $s->location_start }}">{{ $s->location_start }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <form action="{{ url('user/tour') }}" id="start"><button
                                class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
                <div class="row mb-1"> <strong>DESTINATION</strong> </div>

                <div class="row mb-3">

                    <div class="col-sm-8">
                        <select class="form-select" form="end" name="end">
                            <option hidden>Select Destination</option>
                            @foreach ($end as $e)
                                <option value="{{ $e->location_name }}">{{ $e->location_name }}</option> </a>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <form action="{{ url('user/tour') }}" id="end"><button
                                class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>

                <div class="row mb-1">
                    <strong>NUMBER OF DAYS</strong>
                </div>

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <form action="{{ url('user/tour') }}">
                            <input type="hidden" name="one" value="one">
                            <button style="min-width: 130px" class="btn btn-outline-danger">1-3 days</button>
                        </form>
                    </div>
                    <div class="col-sm-6 ">
                        <form action="{{ url('user/tour') }}">
                            <input type="hidden" name="two" value="two">
                            <button style="min-width: 130px" class="btn btn-outline-danger">4-7 days</button>
                        </form>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-sm-6 ">
                        <form action="{{ url('user/tour') }}">
                            <input type="hidden" name="three" value="three">
                            <button style="min-width: 130px" class="btn btn-outline-danger">7-14 days</button>
                        </form>
                    </div>
                    <div class="col-sm-6 ">
                        <form action="{{ url('user/tour') }}">
                            <input type="hidden" name="four" value="four">
                            <button style="min-width: 130px" class="btn btn-outline-danger">over 14 days</button>
                        </form>
                    </div>
                </div>

                <div class="row mb-2"> <strong>DATE START</strong> </div>

                <div class="row mb-3">
                    <form class="input-group mb-3" action="{{ url('user/tour') }}">
                        <input type="date" class="form-control" placeholder="Some text" name="date" id="date">
                        <button class="btn btn-primary">Search</button>
                    </form>
                </div>

                <div class="row mb-2"> <strong>PRICE RANGE</strong> </div>
                <div class="row mb-5">
                    <form class="input-group" action="{{ url('user/tour') }}" id="priceRange" onsubmit="return validate()">
                        <input type="number" min="0" id="min" class="form-control" placeholder="Min price"
                            name="min">
                        <input type="number" min="0" id="max" class="form-control" placeholder="Max price"
                            name="max">
                        <button class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-9 tour-result">
                <div class="row mb-5 my-5">
                    <div class="col-sm-7">
                        <hr>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-select" form="price" name="price">
                            <option hidden>--- SELECT ---</option>
                            <option value="asc">PRICE FROM LOW -> HIGH</option>
                            <option value="desc">PRICE FROM HIGH -> LOW</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <form action="{{ url('user/tour') }}" class="btn btn-primary" id="price">
                            <button class="btn btn-primary btn-sm">Search</button>
                        </form>
                    </div>
                </div>

                <div class="row">
                    @foreach ($data as $d)
                        <div class="col-sm-4 mb-4">
                            <div class="card" style="width:300px">
                                {{-- <a href="tourdetail/{{$d->tour_id}}/{{$d->schedule_id}}"><img class="card-img-top" src="{{asset('images/'.$d->img1)}}" alt="Card image" style="width:100%" height="230px"></a> --}}
                                <a href="tourdetail/{{ $d->schedule_id }}"><img class="card-img-top"
                                        src="{{ asset('images/' . $d->img1) }}" alt="Card image" style="width:100%"
                                        height="230px"></a>

                                <div class="card-body">
                                    <div class="row">
                                        @php
                                            $date = strtotime($d->date_start);
                                        @endphp
                                        <p style="font-size: 14px">{{ date('d-m-Y', $date) }} - {{ $d->duration }}N

                                    </div>
                                    <div class="row">
                                        <strong>
                                            {{ $d->tour_name }}
                                        </strong>
                                    </div>
                                    <div class="row mt-2">
                                        <p>Mã tour: <strong>{{ $d->tour_code }}</strong></p>
                                    </div>
                                    <div class="row">
                                        <p>Nơi khởi hành: <strong>{{ $d->location_start }}</strong></p>
                                    </div>
                                    <div class="row">
                                        <strong class="text-danger">{{ $d->price1 }}.00$</strong>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-5"> <a
                                                href="{{ url('user/payment/$d->schedule_id') }}"><button
                                                    class="btn btn-danger btn-sm">Book now</button></a> </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-5"> <a href="tourdetail/{{ $d->schedule_id }}"><button
                                                    class="btn btn-outline-primary btn-sm">View detail</button></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title')
    Tour
@endsection

@section('linkcss')
    {{ asset('css/user/tour.css') }}
@endsection

@section('linkjs')
    {{ asset('js/user/tour.js') }}
@endsection

@section('page-script')
    <script>
        // let d = new Date().toDateString();
        var d = new Date();
        date = [
            d.getFullYear(),
            ('0' + (d.getMonth() + 1)).slice(-2),
            ('0' + d.getDate()).slice(-2)
        ].join('-');

        document.getElementById("date").value = date;
        $("#date").attr("min", date);


        var validate=function(){
            var from=document.getElementById("min").value;
            var to=document.getElementById("max").value;
            if(from>to){
                alert('min must less than max');
                return false;
            }

        }
    </script>
@endsection
