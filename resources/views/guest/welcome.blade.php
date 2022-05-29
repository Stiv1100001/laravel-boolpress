<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    <div class="">
        @if (Route::has('login'))
        <div class="top-right links d-flex justify-content-end p-3">
            @auth
            <a href="{{ url('/admin') }}" class="btn btn-primary">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div id="root"></div>
        <script src="{{ asset('js/app.js') }}"></script>
    </div>
</body>

</html>
