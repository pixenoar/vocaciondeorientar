<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')Vocación de Orientar</title>
        <meta name="description" content="Desarrollamos páginas y aplicaciones web a medida, logrando crear productos digitales únicos e innovadores.">

        <meta property="og:title" content="Vocación de Orientar">
        <meta property="og:image" content="{{ asset('img/vocacion-de-orientar.jpg') }}">
        <meta name="og:description" content="...">
        <meta property="og:site_name" content="Vocación de Orientar">
        <meta property="og:url" content="https://vocaciondeorientar.ar">
        <meta property="og:type" content="website">

        <meta name="format-detection" content="telephone=no">

        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        @yield('contenido')
        @livewireScripts
    </body>
</html>