<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | @stack('title')</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="{{ mix('js/app.js') }}"></script>

        <style>
            @stack('styles')
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
                -webkit-touch-callout: none; /* iOS Safari */
                -webkit-user-select: none; /* Safari */
                -khtml-user-select: none; /* Konqueror HTML */
                -moz-user-select: none; /* Firefox */
                -ms-user-select: none; /* Internet Explorer/Edge */
                user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
            }

            main {
                flex: 1 0 auto;
            }
        </style>
    </head>
    <body class="grey lighten-4">
        @include('layouts.navbar')
        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
        <script>
            Mousetrap.bind('g r', function () {
                location.href = "{{ route('register') }}";
            });

            Mousetrap.bind('g l', function () {
                location.href = "{{ route('login') }}";
            });
        </script>
    </body>
</html>