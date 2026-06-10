<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Stackxis — Engineering studio for ambitious software teams' }}</title>
    <meta name="description" content="{{ $description ?? 'Stackxis is a software engineering studio designing, building, and scaling reliable products for modern businesses.' }}">
    <meta property="og:site_name" content="Stackxis">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Stackxis' }}">
    <meta property="og:description" content="{{ $description ?? '' }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex min-h-screen flex-col">
        @include('partials.header')

        <main class="flex-1">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
</body>
</html>
