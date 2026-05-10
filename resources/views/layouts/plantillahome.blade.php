<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css']) 
    @stack('styles')
</head>
<body>
    @include('layouts/navUser')

    @section('header')
    @show
    
    @section('content')
    @show

</body>
</html>