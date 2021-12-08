@extends('layouts.app')


@section('content')
    @if($response['city'])
    <img src="{{asset($response['flag']['png'])}}" alt="flag" class="mt-12 rounded shadow-md h-32">
        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from {{$response['city']}}</h1>
        <p class=" text-lg text-green-800 ">Il est {{ date('H:i') }} à {{$response['city']}} </p>

    <p class="text-red-600"></p>
    @else
        <h2> Vous utilisez peut etre une connexion privée</h2>
    @endif
@endsection





