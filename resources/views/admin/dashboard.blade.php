@extends('layouts.admin')

@section('title', 'Dashboard')
@section('heading', 'Dashboard')

@section('content')
    <div class="grid gap-6 md:grid-cols-3">
        <a href="{{ route('admin.blog-posts.index') }}" class="admin-stat-card group">
            <span class="admin-stat-card__icon"><i class="fas fa-newspaper" aria-hidden="true"></i></span>
            <div>
                <p class="text-sm text-muted-foreground">Blog posts</p>
                <p class="text-3xl font-bold">{{ $stats['blog_posts'] }}</p>
            </div>
            <span class="text-sm text-brand-azure group-hover:translate-x-1 transition-transform">Manage →</span>
        </a>

        <a href="{{ route('admin.job-postings.index') }}" class="admin-stat-card group">
            <span class="admin-stat-card__icon"><i class="fas fa-briefcase" aria-hidden="true"></i></span>
            <div>
                <p class="text-sm text-muted-foreground">Job postings</p>
                <p class="text-3xl font-bold">{{ $stats['job_postings'] }}</p>
            </div>
            <span class="text-sm text-brand-azure group-hover:translate-x-1 transition-transform">Manage →</span>
        </a>

        <a href="{{ route('admin.portfolio-items.index') }}" class="admin-stat-card group">
            <span class="admin-stat-card__icon"><i class="fas fa-folder-open" aria-hidden="true"></i></span>
            <div>
                <p class="text-sm text-muted-foreground">Portfolio items</p>
                <p class="text-3xl font-bold">{{ $stats['portfolio_items'] }}</p>
            </div>
            <span class="text-sm text-brand-azure group-hover:translate-x-1 transition-transform">Manage →</span>
        </a>
    </div>

    <div class="admin-panel mt-8">
        <h2 class="text-lg font-semibold">Quick start</h2>
        <p class="mt-2 text-muted-foreground leading-relaxed">
            Content is seeded from your existing site copy. Run <code class="rounded bg-surface-muted px-1.5 py-0.5 text-sm">php artisan db:seed</code> anytime to restore default blog posts, jobs, and portfolio entries without duplicating records.
        </p>
    </div>
@endsection
