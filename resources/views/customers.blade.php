@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <h1>Customers</h1>
    <table id="myTable">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Code</th>
            <th>Contents</th>
            <th>created_at</th>
            <th>Author</th>
        </tr>

            @foreach ($customer as $customers)
                <tr>
                <td>{{$ustomer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->is_blocked}}</td>
                <td>{{$customer->surname}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                </tr>
            @endforeach

    </table>
    {{$posts->links()}}
@endsection