<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | @stack('title')</title>

        <!-- Prefetching -->
        <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
        <link rel="dns-prefetch" href="https://fonts.googleapis.com">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/materialize-css@0.100.2/dist/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/combine/npm/jquery@3.2.1,npm/materialize-css@0.100.2"></script>

        <link rel="prefetch" href="https://cdn.jsdelivr.net/npm/materialize-css@0.100.2/dist/css/materialize.min.css">
        <link rel="prefetch" href="https://cdn.jsdelivr.net/combine/npm/jquery@3.2.1,npm/materialize-css@0.100.2">

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
    </body>
</html>