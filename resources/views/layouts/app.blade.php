<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'WebApp')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="mainContainer">
            <div id="app">
                @yield('content')
            </div>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</html>
