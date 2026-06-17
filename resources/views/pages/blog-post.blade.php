@extends('layouts.app')

@section('content')
    <section class="relative border-b border-hairline">
        <div class="absolute inset-0 hairline-grid opacity-[0.35] pointer-events-none"></div>
        <div class="container-page relative pt-28 pb-16 md:pt-36 md:pb-20">
            <div class="mx-auto max-w-3xl">
                <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-sm text-muted-foreground transition hover:text-brand-azure">
                    <span aria-hidden="true">←</span> Back to blog
                </a>

                <div class="mt-8 flex flex-wrap items-center gap-3 text-xs uppercase tracking-widest text-muted-foreground">
                    <span class="text-brand-azure font-medium">{{ $post['category'] }}</span>
                    <span aria-hidden="true">·</span>
                    <time datetime="{{ $post['date'] }}">{{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }}</time>
                    <span aria-hidden="true">·</span>
                    <span>{{ $post['read_time'] }}</span>
                </div>

                <h1 class="mt-5 text-4xl font-bold leading-tight md:text-5xl">{{ $post['title'] }}</h1>
                <p class="mt-6 text-lg text-muted-foreground leading-relaxed">{{ $post['excerpt'] }}</p>
                <p class="mt-4 text-sm text-muted-foreground">By {{ $post['author'] }}</p>
            </div>
        </div>
    </section>

    <div class="container-page pt-8 md:pt-10">
        <div class="mx-auto max-w-3xl">
            <div class="blog-cover overflow-hidden rounded-2xl border border-hairline">
                <img
                    src="{{ asset($post['image']) }}"
                    alt="{{ $post['image_alt'] }}"
                    loading="eager"
                    decoding="async"
                >
            </div>
        </div>
    </div>

    <article class="container-page py-12 md:py-16">
        <x-blog-prose class="mx-auto max-w-3xl">
            {!! $post['content'] !!}
        </x-blog-prose>
    </article>

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-16">
            <div class="mx-auto max-w-3xl">
                <h2 class="text-2xl font-bold">More from the blog</h2>
                <ul class="mt-8 divide-y divide-hairline border-y border-hairline">
                    @foreach ($morePosts as $related)
                        <li>
                            <a
                                href="{{ route('blog.show', $related['slug']) }}"
                                class="group flex flex-col gap-2 py-5 transition hover:text-brand-azure sm:flex-row sm:items-center sm:justify-between"
                            >
                                <span class="font-medium leading-snug">{{ $related['title'] }}</span>
                                <span class="shrink-0 text-sm text-muted-foreground">{{ \Carbon\Carbon::parse($related['date'])->format('M j, Y') }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section class="border-t border-hairline">
        <div class="container-page py-20 flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight">Building something ambitious?</h2>
                <p class="mt-4 text-lg text-muted-foreground">
                    Tell us about your project. We'll connect you with a senior engineer for a candid technical consultation.
                </p>
            </div>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition shrink-0">
                Book a consultation <span aria-hidden="true">→</span>
            </a>
        </div>
    </section>
@endsection
