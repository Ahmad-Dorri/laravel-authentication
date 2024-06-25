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
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    @isset($header)
        <div class="bg-slate-500 w-full px-10 py-12" >
            <h1 class="text-3xl font-bold text-white" >{{ $header }}</h1>
        </div>
    @endisset
    {{ $slot }}
</body>
</html>
