@extends('adminlayout')

@section('content')
    
<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search name customer for here</span>
            <form action="customer">
                <input type="text" name="search">
                <button>Search</button>
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
                        <h1>Phone</h1>
                    </th>
                    <th>
                        <h1>Password</h1>
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
                @foreach ($customer as $c)
                <tr>
                    <td data-label="ID">{{$c->user_id}}</td>
                    <td data-label="Name">{{$c->user_name}}</td>
                    <td data-label="Email">{{$c->email}}</td>
                    <td data-label="Phone">{{$c->phone}}</td>
                    <td data-label="Password">{{$c->password}}</td>
                    <td data-label="Active">{{$c->active}}</td>
                    <td data-label="Control">
                        <div>
                            <a href="control/updateCustomer/{{$c->user_id}}"><button>Update</button></a>
                            <a href="control/deleteCustomer/{{$c->user_id}}"><button>Delete</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@section('title')
   Customer
@endsection

@endsection

@section('linkcss')
    {{asset('css/admin/customer.css')}}
@endsection

@section('linkjs')

@endsection