<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @php
        $pageTitle = $title ?? 'Stackxis — Engineering studio for ambitious software teams';
        $pageDescription =
            $description ??
            'Stackxis is a software engineering studio designing, building, and scaling reliable products for modern businesses.';
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

    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon-48x48.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

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
        {!! json_encode(
            [
                '@context' => 'https://schema.org',
                '@type' => 'Organization',
                'name' => 'Stackxis',
                'url' => route('home'),
                'logo' => asset('android-chrome-512x512.png'),
                'description' => 'Senior engineering studio building dependable software for ambitious teams.',
                'email' => 'hello@stackxis.com',
                'sameAs' => [],
            ],
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
        ) !!}
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack('head')
</head>

<body>
    <div class="flex min-h-screen flex-col">
        @include('partials.header')

        <main class="flex-1">
            @yield('content')
        </main>

        @include('partials.footer')

        {{-- Floating Action Buttons --}}
        <div
            style="
                position: fixed;
                bottom: 2rem;
                right: 2rem;
                z-index: 999;
                display: flex;
                flex-direction: column;
                gap: 0.75rem;
                align-items: center;
            ">
            <a
                href="https://wa.me/94740190589"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Chat on WhatsApp"
                class="floating-action-btn"
                style="
                    display: flex;
                    width: 55px;
                    height: 55px;
                    border-radius: 50%;
                    background-color: #25D366;
                    color: #fff;
                    text-decoration: none;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
                    transition: opacity 0.3s, transform 0.3s;
                    align-items: center;
                    justify-content: center;
                ">
                <i class="fab fa-whatsapp" style="font-size: 1.75rem;"></i>
            </a>

            <button
                id="scrollToTop"
                onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
                aria-label="Back to top"
                class="floating-action-btn"
                style="
                    display: none;
                    width: 55px;
                    height: 55px;
                    border-radius: 50%;
                    background-color: #1a3a6e;
                    color: #fff;
                    border: none;
                    cursor: pointer;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
                    transition: opacity 0.3s, transform 0.3s;
                    align-items: center;
                    justify-content: center;
                ">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="18 15 12 9 6 15" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        (function() {
            const scrollBtn = document.getElementById('scrollToTop');
            const floatingBtns = document.querySelectorAll('.floating-action-btn');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    scrollBtn.style.display = 'flex';
                } else {
                    scrollBtn.style.display = 'none';
                }
            });

            floatingBtns.forEach(function(btn) {
                btn.addEventListener('mouseenter', function() {
                    btn.style.transform = 'translateY(-3px)';
                });

                btn.addEventListener('mouseleave', function() {
                    btn.style.transform = 'translateY(0)';
                });
            });
        })();
    </script>
</body>

</html>
