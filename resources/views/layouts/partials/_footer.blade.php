<footer class="text-gray-400">
    <p>
        &copy; Copyright {{date('Y')}}
        @if(!Route::is('about'))
        &middot; <a href="{{route('about')}}" class="text-blue-600 hover:text-blue-800 underline">About</a>
        @endif
    </p>
</footer>
