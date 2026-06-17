@extends('layouts.app')

@php
    $caseStudyBase = rtrim(config('app.url'), '/');

    $filters = [
        ['id' => 'all', 'label' => 'All Deployments'],
        ['id' => 'cloud-erp', 'label' => 'Cloud ERPs'],
        ['id' => 'pos', 'label' => 'POS Systems'],
        ['id' => 'saas', 'label' => 'SaaS Platforms'],
        ['id' => 'rescue', 'label' => 'Application Rescue'],
        ['id' => 'web', 'label' => 'Web & Marketing'],
    ];

    $deployments = [
        [
            'categories' => ['pos'],
            'industry' => 'Retail & Hospitality',
            'type' => 'POS Architecture',
            'year' => '2025',
            'metric' => 'Zero data loss during offline-to-online syncs.',
            'summary' => 'Engineered a high-throughput point-of-sale system across 50+ retail outlets. Built with real-time Redis caching and offline-first capabilities.',
            'stack' => ['React', 'TypeScript', 'Redis'],
            'url' => $caseStudyBase.'/work/retail-pos-system',
        ],
        [
            'categories' => ['saas', 'rescue'],
            'industry' => 'B2B SaaS Platform',
            'type' => 'Platform Modernization',
            'year' => '2025',
            'metric' => 'Zero-downtime monolith decomposition.',
            'summary' => 'Rescued a failing legacy monolith by decomposing it into scalable Kubernetes microservices, supporting a 300% surge in enterprise user traffic.',
            'stack' => ['Go', 'Kubernetes', 'GCP'],
            'url' => $caseStudyBase.'/work/saas-microservices-migration',
        ],
        [
            'categories' => ['web'],
            'industry' => 'Fintech & Healthcare',
            'type' => 'Digital Marketing & Web',
            'year' => '2024',
            'metric' => '240% increase in qualified enterprise pipeline.',
            'summary' => 'Designed a high-converting Next.js marketing hub and executed a technical SEO architecture to capture high-intent B2B search traffic.',
            'stack' => ['Next.js', 'Tailwind', 'SEO'],
            'url' => $caseStudyBase.'/work/fintech-marketing-hub',
        ],
        [
            'categories' => [],
            'industry' => 'Applied AI & Data',
            'type' => 'Data Engineering',
            'year' => '2024',
            'metric' => 'Automated 80% of manual reporting workflows.',
            'summary' => 'Deployed a secure, internal LLM and RAG system over existing enterprise data silos to automate complex financial reporting.',
            'stack' => ['Python', 'PostgreSQL', 'OpenAI API'],
            'url' => $caseStudyBase.'/work/ai-reporting-automation',
        ],
    ];

    $itemListSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        'name' => 'Stackxis Case Studies and Software Deployments',
        'description' => 'Portfolio of custom software, ERP, and POS systems engineered by Stackxis.',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'url' => $caseStudyBase.'/work/logistics-cloud-erp',
                'name' => 'Custom Cloud ERP for Global Logistics',
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'url' => $caseStudyBase.'/work/retail-pos-system',
                'name' => 'Multi-Outlet POS System for Retail',
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'url' => $caseStudyBase.'/work/saas-microservices-migration',
                'name' => 'SaaS Platform Modernization and Microservices',
            ],
            [
                '@type' => 'ListItem',
                'position' => 4,
                'url' => $caseStudyBase.'/work/fintech-marketing-hub',
                'name' => 'Next.js Web Design and B2B Digital Marketing',
            ],
        ],
    ];
@endphp

@push('head')
    <script type="application/ld+json">
        {!! json_encode($itemListSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush

@section('content')
    {{-- Hero --}}
    <section class="relative border-b border-hairline">
        <div class="absolute inset-0 hairline-grid opacity-[0.35] pointer-events-none"></div>
        <div class="container-page relative pt-28 pb-20 md:pt-36 md:pb-28">
            <p class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">SELECTED DEPLOYMENTS</p>
            <h1 class="mt-5 text-4xl md:text-6xl lg:text-8xl font-bold leading-[1.02] max-w-5xl">
                Architectures that scale. <span class="text-gradient-brand">Outcomes we own.</span>
            </h1>
            <p class="mt-6 text-lg md:text-xl text-muted-foreground max-w-3xl">
                Explore our recent enterprise deployments. From zero-downtime legacy migrations to high-throughput cloud ERPs, this is how we engineer competitive advantages for our partners.
            </p>
        </div>
    </section>

    {{-- Featured deployment --}}
    <section class="container-page py-16 md:py-20">
        <div class="grid lg:grid-cols-[1fr_1.4fr] gap-12 items-center">
            <div>
                <span class="inline-block rounded-full border border-hairline px-3 py-1 text-xs uppercase tracking-widest text-brand-azure">
                    Logistics &amp; Supply Chain
                </span>
                <h2 class="mt-6 text-3xl md:text-4xl font-bold leading-tight text-gradient-brand">
                    40% reduction in global warehouse processing latency.
                </h2>
                <p class="mt-4 text-2xl md:text-3xl font-bold leading-tight">Cloud-Native Inventory ERP</p>
                <p class="mt-5 text-muted-foreground leading-relaxed">
                    Migrating a fragmented, on-premise inventory system handling 10M+ daily rows into a unified AWS architecture without halting daily operations.
                </p>
                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach (['Node.js', 'PostgreSQL', 'AWS', 'Docker'] as $tech)
                        <span class="work-tech-chip">{{ $tech }}</span>
                    @endforeach
                </div>
                <a
                    href="{{ $caseStudyBase }}/work/logistics-cloud-erp"
                    class="mt-8 inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition"
                >
                    Read the full technical case study <span aria-hidden="true">→</span>
                </a>
            </div>
            <div class="work-featured-visual" role="img" aria-label="Cloud ERP inventory dashboard showing warehouse latency, throughput, and sync metrics">
                @include('partials.work-erp-dashboard')
            </div>
        </div>
    </section>

    {{-- Sticky filter --}}
    <div class="work-filter-bar" id="work-filter-bar">
        <div class="container-page">
            <div class="work-filter-bar__track" role="tablist" aria-label="Filter deployments by category">
                @foreach ($filters as $i => $filter)
                    <button
                        type="button"
                        role="tab"
                        class="work-filter-btn {{ $i === 0 ? 'work-filter-btn--active' : '' }}"
                        data-filter="{{ $filter['id'] }}"
                        aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                    >
                        {{ $filter['label'] }}
                    </button>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Engineering grid --}}
    <x-section id="deployments-grid">
        <div class="grid md:grid-cols-2 gap-5 md:gap-6" id="portfolio-cards">
            @foreach ($deployments as $card)
                <article
                    class="portfolio-card"
                    data-categories="{{ implode(' ', $card['categories']) }}"
                >
                    <div class="portfolio-card__meta">
                        <span>{{ $card['type'] }}</span>
                        <span>{{ $card['year'] }}</span>
                    </div>
                    <p class="text-xs uppercase tracking-widest text-brand-sky">{{ $card['industry'] }}</p>
                    <h3 class="portfolio-card__metric">{{ $card['metric'] }}</h3>
                    <p class="portfolio-card__summary">{{ $card['summary'] }}</p>
                    <div class="portfolio-card__stack">
                        @foreach ($card['stack'] as $tech)
                            <span class="portfolio-card__tag">{{ $tech }}</span>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>
    </x-section>

    {{-- How we measure success --}}
    <section class="work-success-strip border-t border-hairline">
        <div class="container-page relative py-20 md:py-28">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight max-w-4xl">
                Code is just a tool. We measure success by business impact.
            </h2>
            <div class="mt-14 grid md:grid-cols-3 gap-10 md:gap-8">
                @foreach ([
                    ['01', 'Uptime & Reliability', 'If it goes down, we failed. We architect for 99.99% availability.'],
                    ['02', 'Latency & Speed', 'Slow software kills adoption. We optimize database queries down to the millisecond.'],
                    ['03', 'Revenue & Scale', 'We build infrastructure capable of handling the traffic you don\'t even have yet.'],
                ] as [$n, $title, $desc])
                    <div class="border-t border-white/15 pt-8">
                        <span class="text-sm text-brand-sky font-medium">{{ $n }}</span>
                        <h3 class="mt-3 text-xl font-semibold">{{ $title }}</h3>
                        <p class="mt-3 text-primary-foreground/70 leading-relaxed">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Bottom CTA --}}
    <section class="border-t border-hairline">
        <div class="container-page py-20 md:py-28 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight">
                    Ready to engineer your next platform?
                </h2>
                <p class="mt-5 text-lg text-muted-foreground">
                    Bring us your constraints, your bottlenecks, and your roadmap. Let's architect a system built to scale.
                </p>
            </div>
            <a
                href="{{ route('contact') }}"
                class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition shrink-0"
            >
                Book a technical consultation <span aria-hidden="true">→</span>
            </a>
        </div>
    </section>
@endsection

@push('head')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterBar = document.getElementById('work-filter-bar');
            const buttons = filterBar ? filterBar.querySelectorAll('[data-filter]') : [];
            const cards = document.querySelectorAll('#portfolio-cards .portfolio-card');

            buttons.forEach(function (button) {
                button.addEventListener('click', function () {
                    const filter = button.getAttribute('data-filter');

                    buttons.forEach(function (btn) {
                        const isActive = btn === button;
                        btn.classList.toggle('work-filter-btn--active', isActive);
                        btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
                    });

                    cards.forEach(function (card) {
                        const categories = card.getAttribute('data-categories') || '';
                        const matches = filter === 'all' || categories.split(' ').includes(filter);
                        card.classList.toggle('portfolio-card--hidden', !matches);
                    });
                });
            });
        });
    </script>
@endpush
