<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('/bootstrap-5/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/fontawesome-free-/fontawesome-free-5.14.0-web/css/all.css')}}">
    </head>
    <body class="antialiased">
        @include('templates.header')
        <script src="{{asset('/bootstrap-5/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/fontawesome-free-5/fontawesome-free-5.14.0-web/js/all.min.js')}}"></script>
    </body>
</html>
