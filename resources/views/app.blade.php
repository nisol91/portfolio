<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nicola's Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- CSS --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    </head>
    <body>
        @include('partials.navbar')
        @yield('main_content')
        @include('partials.footer')
        <script src="{{ asset('js/app.js') }}"></script>




    </body>
</html>
