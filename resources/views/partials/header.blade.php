@php
    $links = [
        ['route' => 'home', 'label' => 'Home', 'exact' => true],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'services', 'label' => 'Services'],
        ['route' => 'solutions', 'label' => 'Solutions'],
        ['route' => 'portfolio', 'label' => 'Work'],
        ['route' => 'careers', 'label' => 'Careers'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-hairline bg-background/80 backdrop-blur-xl">
    <div class="container-page flex h-16 items-center justify-between gap-6">
        <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
            <img src="{{ asset('images/stackxis-logo.svg') }}" alt="Stackxis" class="h-7 w-auto">
        </a>

        <nav class="hidden lg:flex items-center gap-1">
            @foreach ($links as $link)
                @php
                    $isActive = $link['exact'] ?? false
                        ? request()->routeIs($link['route'])
                        : request()->routeIs($link['route']);
                @endphp
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'px-3 py-2 text-sm transition-colors',
                        'text-foreground font-medium' => $isActive,
                        'text-muted-foreground hover:text-foreground' => ! $isActive,
                    ])
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-2">
            <a
                href="{{ route('contact') }}"
                class="hidden sm:inline-flex items-center gap-2 rounded-full bg-primary px-5 py-2.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition"
            >
                Start a project
                <span aria-hidden="true">→</span>
            </a>
            <button
                id="mobile-menu-toggle"
                class="lg:hidden p-2 -mr-2"
                aria-label="Toggle menu"
                type="button"
            >
                <div class="space-y-1.5">
                    <span class="block h-0.5 w-5 bg-foreground"></span>
                    <span class="block h-0.5 w-5 bg-foreground"></span>
                </div>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="lg:hidden hidden border-t border-hairline bg-background">
        <nav class="container-page py-4 flex flex-col">
            @foreach ($links as $link)
                <a
                    href="{{ route($link['route']) }}"
                    class="py-3 text-base text-foreground border-b border-hairline last:border-0"
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a
                href="{{ route('contact') }}"
                class="mt-4 inline-flex items-center justify-center rounded-full bg-primary px-5 py-3 text-sm font-medium text-primary-foreground"
            >
                Start a project
            </a>
        </nav>
    </div>
</header>
