<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if(@isset($title))
        <title>
            {{ $title }} | Jobify | Find Your dream Job
        </title>
    @else
        <title>
            Jobify | Find Your dream Job
        </title>
    @endif
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
@isset($header)
    <div class="bg-slate-500 w-full px-10 py-12">
        <h1 class="text-3xl font-bold text-white">{{ $header }}</h1>
    </div>
@endisset
<x-navigation class="flex items-center justify-between h-full ">
    <div>
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/jobs" :active="request()->is('/jobs')">Jobs</x-nav-link>
    </div>
    @guest
        <div>
            <x-nav-link href="/login" :active="request()->is('/login')">Login</x-nav-link>
            <x-nav-link href="/register" :active="request()->is('/register')">Register</x-nav-link>
        </div>
    @endguest
    @auth
        <form method="post" action="/logout" >
            @csrf
            <x-button type="submit" >
                Logout
            </x-button>
        </form>
    @endauth
</x-navigation>
{{ $slot }}
</body>
</html>
