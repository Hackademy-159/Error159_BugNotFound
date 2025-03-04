<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="col-bg {{ Request::is('/') ? 'homepage' : 'internal-page' }}">
    {{-- @if (Route::currentRouteName()=='homepage')
    <x-navbar-home />
        @else --}}
    <x-navbar/>     
    {{-- @endif --}}

    
    {{$slot}}

    
    <x-footer></x-footer>
</body>
</html>