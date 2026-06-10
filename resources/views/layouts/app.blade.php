<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $pageTitle = $title ?? 'Stackxis — Engineering studio for ambitious software teams';
        $pageDescription = $description ?? 'Stackxis is a software engineering studio designing, building, and scaling reliable products for modern businesses.';
        $pageUrl = url()->current();
        $pageImage = $ogImage ?? asset('images/logo.png');
    @endphp
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Stackxis">
    <meta name="theme-color" content="#1a3a6e">
    <link rel="canonical" href="{{ $pageUrl }}">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="{{ route('sitemap') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    <meta property="og:site_name" content="Stackxis">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ $pageUrl }}">
    <meta property="og:image" content="{{ $pageImage }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta name="twitter:image" content="{{ $pageImage }}">
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Stackxis',
            'url' => route('home'),
            'logo' => asset('images/logo.png'),
            'description' => 'Senior engineering studio building dependable software for ambitious teams.',
            'email' => 'hello@stackxis.com',
            'sameAs' => [],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
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
