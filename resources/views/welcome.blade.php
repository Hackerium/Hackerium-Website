<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} || Homepage || Learn coding, the right way</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .text {
            position: absolute;
            left: 50%;                        /* horizontal alignment */
            top: 50%;                         /* vertical alignment */
            transform: translate(-50%, -50%); /* precise centering; see link below */
        }
    </style>
</head>
<body>
<div id="fullpage">
    <div class="section black white-text">
        <div class="text">
            <h1>Hackerium</h1>
            <h3 style="font-weight: 100; font-size: 35px">Computer education, the right way</h3>
        </div>
    </div>
    <div class="section black">
        <div class="">
            <div class="row">
                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Yo</span>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Yo</span>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Yo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#fullpage").fullpage();
    });
</script>
</body>
</html>