<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Mi Aplicación')</title>

    @vite('resources/css/app.css')
    {{-- <link href="./output.css" rel="stylesheet"> --}}



    <style>
        .active {
            font weight: bold;
        }
    </style>


</head>

<body class="ml-10">



    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
</body>



</html>
