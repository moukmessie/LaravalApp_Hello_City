@extends('app')

@section('title', config('app.name'))

@section('content')
    <img src="{{asset('images/img_1.jpg')}}" alt="flag">
        <h1>Hello from Paris</h1>
        <p>Il est {{ date('H:i') }} à Tourcoing </p>


@endsection





