<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
​
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
​
    <title>{{ config('app.name', 'Krautuvė') }}</title>
​
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
​
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
​
    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', '') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
​
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
​
                    </ul>
​
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <a class="nav-link" href="/products">Produktai</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/products/create">Sukurti Produkta</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/categories">Kategorijos</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/categories/create">Sukurti kategorija</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
​
        <main class="py-4">
            <div class="container">

                @yield('content')

            </div>

        </main>
    </div>
​
<footer>
    <div class="container">
        visos teises saugomos
    </div>
</footer>
</body>
</html>
