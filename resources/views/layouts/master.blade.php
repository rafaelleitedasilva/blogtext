<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>BlogText @yield('title') </title>
        <link rel="shortcut icon" href="{{ Vite::asset('resources/images/blogtext-logo.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
	    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

        <!-- CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'resources/scss/style.scss'])
    </head>
    <body>
        @include('layouts.header')
        @yield('content')
        {{-- @include('layouts.footer') --}}
    </body>
    @yield('scripts')
</html>
