
@extends('app')
@section('title','About | '. config('app.name'))

@section('content')
    <img src="{{asset('images/img_2.png')}}" alt="flag">
    <p> Built with &hearts; by MOUK MESSIE</p>

    <p><a href="{{ route('home') }}">Revenir à la page d'accueil </a></p>
@endsection
