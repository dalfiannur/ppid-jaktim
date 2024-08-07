<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @stack('styles')
        @stack('script-loaders')
    </head>
    <body class="font-plusJakartaSans bg-gray-100">
        {{ $slot }}
        @stack('scripts')
    </body>
</html>
