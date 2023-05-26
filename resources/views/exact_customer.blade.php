@extends('layouts.template')

@section('title', 'Customers')

@section('content')
<div> <h1>Customer {{$customer->id}}</h1></div>
<div> {{$customer->is_blocked}}</div>
<div> {{$customer->name}}</div>
<div> {{$customer->surname}}</div>
<div> {{$customer->email}}</div>
<div> {{$customer->phone}}</div>
<div> <h2>Adresses</h2></div>
<div>     
    @foreach ($adresses as $adress)
        <h3>{{$adress->custom_name}} | {{$adress->city}} | {{$adress->street}} | {{$adress->building}}  | {{$adress->intercom_key}} | {{$adress->floor}} | {{$adress->apartment}}</h3>
    @endforeach
</div>
@endsection