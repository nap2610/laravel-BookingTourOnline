@extends('adminlayout')

@section('content')
    
<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search Staff for here</span>
            <form action="">
                <input type="text" name="search">
                <button>Search</i></button>
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
                        <h1>Control</h1>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($staff as $st)
                <tr>
                    <td data-label="ID">{{$st->id}}</td>
                    <td data-label="Name">{{$st->name}}</td>
                    <td data-label="Email">{{$st->email}}</td>
                    <td data-label="Password">{{$st->password}}</td>
                    <td data-label="Control">
                        <div>
                            <a href="control/updateStaff/{{$st->id}}"><button>Update</button></a>
                            <a href="control/deleteStaff/{{$st->id}}"><button>Delete</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@section('title')
   Staff
@endsection

@endsection

@section('linkcss')
    {{asset('css/admin/staff.css')}}
@endsection

@section('linkjs')

@endsection