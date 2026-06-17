<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Admin') — Stackxis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="admin-body {{ auth()->check() ? 'admin-body--auth' : 'admin-body--guest' }}">
    <div class="admin-shell {{ auth()->check() ? 'admin-shell--auth' : 'admin-shell--guest' }}">
        @auth
            <aside class="admin-sidebar">
                <div class="admin-sidebar__brand">
                    <a href="{{ route('admin.dashboard') }}" class="text-lg font-bold text-primary-foreground">Stackxis</a>
                    <span class="text-xs uppercase tracking-widest text-primary-foreground/60">Admin</span>
                </div>

                <nav class="admin-nav" aria-label="Admin navigation">
                    <a href="{{ route('admin.dashboard') }}" class="admin-nav__link {{ request()->routeIs('admin.dashboard') ? 'admin-nav__link--active' : '' }}">
                        <i class="fas fa-gauge-high" aria-hidden="true"></i>
                        Dashboard
                    </a>
                    <a href="{{ route('admin.blog-posts.index') }}" class="admin-nav__link {{ request()->routeIs('admin.blog-posts.*') ? 'admin-nav__link--active' : '' }}">
                        <i class="fas fa-newspaper" aria-hidden="true"></i>
                        Blog
                    </a>
                    <a href="{{ route('admin.job-postings.index') }}" class="admin-nav__link {{ request()->routeIs('admin.job-postings.*') ? 'admin-nav__link--active' : '' }}">
                        <i class="fas fa-briefcase" aria-hidden="true"></i>
                        Jobs
                    </a>
                    <a href="{{ route('admin.portfolio-items.index') }}" class="admin-nav__link {{ request()->routeIs('admin.portfolio-items.*') ? 'admin-nav__link--active' : '' }}">
                        <i class="fas fa-folder-open" aria-hidden="true"></i>
                        Portfolio
                    </a>
                </nav>

                <div class="admin-sidebar__footer">
                    <a href="{{ route('home') }}" class="admin-nav__link" target="_blank" rel="noopener">
                        <i class="fas fa-external-link-alt" aria-hidden="true"></i>
                        View site
                    </a>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="admin-nav__link w-full text-left">
                            <i class="fas fa-right-from-bracket" aria-hidden="true"></i>
                            Sign out
                        </button>
                    </form>
                </div>
            </aside>
        @endauth

        <main class="admin-main">
            @auth
                <header class="admin-topbar">
                    <div>
                        <p class="admin-topbar__eyebrow">Content management</p>
                        <h1 class="admin-topbar__title">@yield('heading')</h1>
                    </div>
                    @yield('actions')
                </header>

                <div class="admin-content">
                    @include('admin.partials.flash')
                    @yield('content')
                </div>
            @else
                @include('admin.partials.flash')
                @yield('content')
            @endauth
        </main>
    </div>
</body>
</html>
