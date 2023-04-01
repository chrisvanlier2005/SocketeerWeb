<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="dark" style="color-scheme: dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("css/global.css")}}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-950 overflow-x-hidden">
<section class="flex items-center justify-between h-12 w-full bg-black fixed top-0 px-5 bg-gray-900 z-50">
    <h2 class="text-xl font-extrabold text-emerald-500">Socketeer</h2>
    <div>
        <img src="{{asset(auth()->user()->avatar)}}" alt="avatar" class="w-9 cursor-pointer rounded-full hover:ring-4 ring-emerald-500/50 transition-all duration-200">
    </div>
</section>
<div class="mt-12"></div>
<x-dashboard-navigation/>
@isset($navigation)
    {{$navigation}}
@endisset
<main
    {{$attributes->merge(["class" => "sm:ml-64 w-full md:w-[calc(100%-16rem)] min-h-screen relative"])}}>
    {{ $slot }}
</main>
@livewireScripts

</body>
</html>
