<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nicola's Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        {{-- CSS --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
        {{-- onload animation --}}
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    </head>
    <body>
<div class="se-pre-con"></div>
        @include('partials.navbar')
        @yield('main_content')
        @include('partials.footer')
        <script src="{{ asset('js/app.js') }}"></script>




    </body>
</html>
