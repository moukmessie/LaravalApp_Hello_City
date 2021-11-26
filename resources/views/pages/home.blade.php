@extends('app')

@section('title', config('app.name'))

@section('content')
    <img src="{{asset('images/img_1.jpg')}}" alt="flag" class="mt-12 rounded shadow-md h-32">
        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Paris</h1>
        <p class=" text-lg text-green-800 ">Il est {{ date('H:i') }} à Tourcoing </p>


@endsection





