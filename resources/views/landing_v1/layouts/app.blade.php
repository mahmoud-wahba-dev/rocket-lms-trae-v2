<!doctype html>
<html data-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $pageTitle ?? 'Rocket LMS' }}</title>
    <meta name="description" content="{{ $pageDescription ?? '' }}">
    <meta name="robots" content="{{ $pageRobot ?? 'index,follow' }}">

    @vite(['resources/css/landing_v1.css', 'resources/js/landing_v1.js'])
</head>
<body>
    <div id="landing-v1-app" class="min-h-screen">
        @yield('content')
    </div>
</body>
</html>
