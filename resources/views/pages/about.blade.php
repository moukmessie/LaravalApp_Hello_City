
@extends('layouts.app', ['title' => 'About'])


@section('content')
    <img src="{{asset('images/img_2.png')}}" alt="flag" class="my-12 rounded-full shadow-md">
    <h2 class="mb-5 text-gray-600"> Built with <span class="text-pink-500">&hearts;</span>  by MOUK MESSIE</h2>

    <p>
        <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800 underline">Revenir à la page d'accueil</a>
    </p>
@endsection
