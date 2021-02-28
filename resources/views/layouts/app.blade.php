<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ $page_title }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <!-- Favico -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}" sizes="196x196" />
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
