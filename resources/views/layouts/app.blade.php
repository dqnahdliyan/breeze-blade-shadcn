<!DOCTYPE html>
<html x-cloak x-data="{ darkMode: $persist(false) }" :class="{ 'dark': darkMode === true }"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('font/stylesheet.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-background">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <div class="border-b bg-card text-card-foreground">
                <x-hero>{{ $header }}</x-hero>
            </div>
        @endif

        <!-- Page Content -->
        <main class="py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
