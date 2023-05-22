@extends('layouts.template')

@section('title', 'Customers')

@section('content')

    <form method="GET" >
    <div>
        <label>
            Filter 1
        </label>
        <input type = "text">
    </div>
    <button type="submit"> confirm </button>
    </form>

    <h1>Customers</h1>
    <table id="T1">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Code</th>
            <th>Contents</th>
            <th>created_at</th>
            <th>Author</th>
        </tr>

            @foreach ($customers as $customer)
                <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->is_blocked}}</td>
                <td>{{$customer->surname}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                </tr>
            @endforeach
    </table>
@endsection