<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Just Submit</title>

         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-light px-5 border-bottom d-flex justify-content-center">
            <a href={{route('home')}} class="navbar-brand"> <span class="display-4">Just Submit</span></a>

        </nav>
        @yield('content')
    </body>
</html>
