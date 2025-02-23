<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="logo.ico" type="image/x-icon">
        @vite('resources/css/app.css')
        @vite(['resources/js/app.js'])
        <meta name="description" content="King Tech adalah startup inovatif yang menghadirkan solusi teknologi modern untuk bisnis dan individu. Kami berfokus pada pengembangan website, aplikasi mobile, kecerdasan buatan, dan transformasi digital untuk masa depan yang lebih cerdas.">
        <title>{{ $title ?? 'King Tech' }}</title>
    </head>
    <body class="font-main overflow-x-hidden h-full">

        <x-navbar />

        <main class="w-full h-full">
            {{ $slot }}
        </main>

        <x-footer />

         @livewireScripts
    </body>
</html>
