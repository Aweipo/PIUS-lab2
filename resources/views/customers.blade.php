@extends('layouts.template')

@section('title', 'Customers')

@section('content')

    <form method="GET" >
    <div>
        <label>
            Покупатель заблокирован
        </label>
        <input id = "is_blocked_filter" name="isBlocked" type = "checkbox" value="{{$isBlocked}}">
    </div>
    <button type="submit"> confirm </button>
    </form>

    <form method="GET" >
    <div>
        <label>
            Почта покупателя
        </label>
        <input type = "text" id = "email_filter" name="email" placeholder="Email" value="{{$email}}">
    </div>
    <button type="submit"> confirm </button>
    </form>

    <form method="GET" >
    <div>
        <label>
        Телефон покупателя
        </label>
        <input type = "text" id = "phone_filter" name = 'phone' placeholder="Phone" value="{{$phone}}">
    </div>
    <button type="submit"> confirm </button>
    </form>

    <form method="GET" >
    <div>
        <label>
        Поиск по имени и фамилии
        </label>
        <input type = "text" id = "name"  name="name" placeholder="Name" value="{{$name}}">
        <input type = "text" id = "surname" name="surname" placeholder="Surname" value="{{$surname}}">
    </div>
    <button type="submit"> confirm </button>
    </form>

    <h1>Customers</h1>
    <table id="T1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Is blocked</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Phone</th>
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
    {{$customers->links()}}
@endsection