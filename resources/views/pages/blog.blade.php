@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="Blog"
        title='Engineering notes from the <span class="text-gradient-brand">trenches</span>.'
        description="Practical perspectives on software architecture, ERP modernization, applied AI, and building remote engineering teams that ship."
    />

    <x-section>
        @if (count($posts) > 0)
            <div class="grid gap-8 md:grid-cols-2">
                @foreach ($posts as $post)
                    <article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-hairline bg-background transition-colors hover:bg-surface-muted">
                        <a href="{{ route('blog.show', $post['slug']) }}" class="blog-cover blog-cover--card block shrink-0" tabindex="-1" aria-hidden="true">
                            <img
                                src="{{ asset($post['image']) }}"
                                alt=""
                                loading="lazy"
                                decoding="async"
                            >
                        </a>

                        <div class="flex flex-1 flex-col p-8 md:p-10">
                            <div class="flex flex-wrap items-center gap-3 text-xs uppercase tracking-widest text-muted-foreground">
                                <span class="text-brand-azure font-medium">{{ $post['category'] }}</span>
                                <span aria-hidden="true">·</span>
                                <time datetime="{{ $post['date'] }}">{{ \Carbon\Carbon::parse($post['date'])->format('M j, Y') }}</time>
                                <span aria-hidden="true">·</span>
                                <span>{{ $post['read_time'] }}</span>
                            </div>

                            <h2 class="mt-5 text-2xl font-bold leading-tight md:text-3xl">
                                <a href="{{ route('blog.show', $post['slug']) }}" class="transition-colors group-hover:text-brand-azure">
                                    {{ $post['title'] }}
                                </a>
                            </h2>

                            <p class="mt-4 flex-1 text-muted-foreground leading-relaxed">{{ $post['excerpt'] }}</p>

                            <div class="mt-8">
                                <a
                                    href="{{ route('blog.show', $post['slug']) }}"
                                    class="inline-flex items-center gap-2 text-sm font-medium text-brand-azure"
                                >
                                    Read article
                                    <span class="transition-transform group-hover:translate-x-1" aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <x-empty-state
                icon="fa-newspaper"
                title="No articles yet"
                message="There are no blog posts currently available. Check back soon for engineering notes from our team."
            />
        @endif
    </x-section>

    <section class="border-t border-hairline">
        <div class="container-page py-20 flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight">Want to talk through your architecture?</h2>
                <p class="mt-4 text-lg text-muted-foreground">
                    Book a free consultation with a senior engineer no sales deck, just an honest technical conversation.
                </p>
            </div>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition shrink-0">
                Get in touch <span aria-hidden="true">→</span>
            </a>
        </div>
    </section>
@endsection
