<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css)}}">

</head>

<body>
    <header>
        <div class="logo">
            StarWars
        </div>
        <nav class="nav justify-content-center fixed-top">
            <a class="nav-link text-dark" href="{{route('welcome'}}">Home</a>
            <a class="nav-link text-dark" href="{{route('news.index'}}">News</a>
            <a class="nav-link text-dark" href="#div3">Div 3</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>
            Copyright 2022 StarWars
        </p>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>