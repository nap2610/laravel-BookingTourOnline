@extends('adminlayout')

@section('content')
    
<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search Tour-Guide for here</span>
            <form action="">
                <input type="text" name="search">
                <button>Search</i></button>
            </form>
        </div>
        <div class="insert">
            <form action="control/insertGuide">
                <button>Insert</button>
            </form>
        </div>
    </div>

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
                        <h1>ID</h1>
                    </th>
                    <th>
                        <h1>Name</h1>
                    </th>
                    <th>
                        <h1>Email</h1>
                    </th>
                    <th>
                        <h1>Password</h1>
                    </th>
                    <th>
                        <h1>Phone</h1>
                    </th>
                    <th>
                        <h1>Active</h1>
                    </th>
                    <th>
                        <h1>Control</h1>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($guide as $g)
                <tr>
                    <td data-label="ID">{{$g->tour_guide_id}}</td>
                    <td data-label="Name">{{$g->name}}</td>
                    <td data-label="Email">{{$g->email}}</td>
                    <td data-label="Gender">{{$g->gender}}</td>
                    <td data-label="Phone">{{$g->phone}}</td>
                    <td data-label="Active">{{$g->active}}</td>
                    <td data-label="Control">
                        <div>
                            <a href="control/updateGuide/{{$g->tour_guide_id}}"><button>Update</button></a>
                            <a href="control/deleteGuide/{{$g->tour_guide_id}}"><button>Delete</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@section('title')
  Tour Guide
@endsection

@endsection

@section('linkcss')
    {{asset('css/admin/tourguide.css')}}
@endsection

@section('linkjs')

@endsection