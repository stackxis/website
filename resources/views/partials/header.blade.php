@php
    $links = [
        ['route' => 'home', 'label' => 'Home', 'exact' => true],
        ['route' => 'services', 'label' => 'Services'],
        ['route' => 'solutions', 'label' => 'Products'],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'careers', 'label' => 'Careers'],
    ];
@endphp

<header class="site-header">
    <div class="container-page site-header-wrap">
        <div class="site-header-bar">
            <a href="{{ route('home') }}" class="site-header-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Stackxis">
            </a>

            <nav class="site-header-nav">
                @foreach ($links as $link)
                    @php
                        $isActive = $link['exact'] ?? false
                            ? request()->routeIs($link['route'])
                            : request()->routeIs($link['route']);
                    @endphp
                    <a
                        href="{{ route($link['route']) }}"
                        @class([
                            'site-header-link',
                            'site-header-link--active' => $isActive,
                        ])
                    >
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="site-header-actions">
                <a href="{{ route('contact') }}" class="site-header-cta">
                    Let's Talk
                </a>
                <button
                    id="mobile-menu-toggle"
                    class="site-header-toggle"
                    aria-label="Toggle menu"
                    aria-expanded="false"
                    type="button"
                >
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>

    <div class="container-page">
        <div id="mobile-menu" class="site-header-mobile hidden">
            <nav class="flex flex-col">
            @foreach ($links as $link)
                @php
                    $isActive = $link['exact'] ?? false
                        ? request()->routeIs($link['route'])
                        : request()->routeIs($link['route']);
                @endphp
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'site-header-mobile-link',
                        'site-header-link--active' => $isActive,
                    ])
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a href="{{ route('contact') }}" class="site-header-cta mt-3 inline-flex items-center justify-center">
                Let's Talk
            </a>
            </nav>
        </div>
    </div>
</header>
