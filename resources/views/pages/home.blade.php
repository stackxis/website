@extends('layouts.app')

@section('content')
    {{-- HERO --}}
    <section class="relative overflow-hidden border-b border-hairline">
        <div class="absolute inset-0 hairline-grid opacity-[0.35] pointer-events-none"></div>
        <div class="absolute -top-32 -right-32 h-[480px] w-[480px] rounded-full bg-brand-sky/20 blur-3xl pointer-events-none"></div>
        <div class="container-page relative pt-28 pb-24 md:pt-40 md:pb-36">
            <div class="flex items-center gap-2 text-xs uppercase tracking-[0.2em] text-brand-azure font-medium animate-rise">
                <span class="h-1.5 w-1.5 rounded-full bg-brand-azure"></span>
                Engineering studio · Est. 2021
            </div>
            <h1 class="mt-6 text-5xl md:text-7xl lg:text-8xl font-bold leading-[0.98] max-w-5xl animate-rise">
                Software that
                <span class="text-gradient-brand">earns trust</span>,
                engineered to last.
            </h1>
            <p class="mt-8 text-lg md:text-xl text-muted-foreground max-w-2xl animate-rise">
                Stackxis is a senior engineering studio partnering with founders and
                enterprises to build dependable digital products — from first
                prototype to production scale.
            </p>
            <div class="mt-10 flex flex-wrap items-center gap-3 animate-rise">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition">
                    Book a consultation <span aria-hidden="true">→</span>
                </a>
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 rounded-full border border-hairline px-7 py-3.5 text-sm font-medium hover:border-foreground transition">
                    Explore services
                </a>
            </div>

            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-px bg-hairline border border-hairline rounded-2xl overflow-hidden">
                @foreach ([['80+', 'Products shipped'], ['12', 'Countries served'], ['98%', 'Client retention'], ['24/7', 'Delivery cadence']] as [$n, $l])
                    <div class="bg-background p-6 md:p-8">
                        <div class="text-3xl md:text-4xl font-bold text-gradient-brand">{{ $n }}</div>
                        <div class="mt-2 text-xs uppercase tracking-widest text-muted-foreground">{{ $l }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CAPABILITIES --}}
    <x-section>
        <x-section-header
            eyebrow="What we do"
            title="A single team for every layer of your product."
            description="From discovery to deployment, we operate as one integrated engineering partner — design, code, infrastructure, and intelligence under one roof."
        />
        <div class="mt-16 grid md:grid-cols-2 gap-px bg-hairline border border-hairline rounded-3xl overflow-hidden">
            @foreach ([
                ['01', 'Product engineering', 'Web & mobile products built end-to-end with senior engineers and a product mindset.'],
                ['02', 'Platform & cloud', 'Scalable infrastructure, DevOps pipelines, and cloud-native architecture on AWS, GCP, and Azure.'],
                ['03', 'AI & data', 'Applied AI, LLM integrations, data pipelines, and analytics that move real metrics.'],
                ['04', 'Design systems', 'Cohesive UI systems and product design that compound across teams and surfaces.'],
            ] as [$k, $t, $d])
                <div class="bg-background p-8 md:p-12 group hover:bg-surface-muted transition-colors">
                    <div class="flex items-baseline justify-between">
                        <span class="text-xs tracking-widest text-brand-azure">{{ $k }}</span>
                        <span class="text-muted-foreground group-hover:translate-x-1 transition-transform">→</span>
                    </div>
                    <h3 class="mt-6 text-2xl font-bold">{{ $t }}</h3>
                    <p class="mt-3 text-muted-foreground">{{ $d }}</p>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- APPROACH --}}
    <section class="bg-primary text-primary-foreground">
        <div class="container-page py-24 md:py-32 grid lg:grid-cols-[1fr_1.2fr] gap-12 items-start">
            <div>
                <p class="text-xs uppercase tracking-[0.2em] text-brand-sky font-medium">Our approach</p>
                <h2 class="mt-4 text-3xl md:text-5xl font-bold leading-[1.05]">
                    We measure success in what ships, not what's promised.
                </h2>
            </div>
            <div class="space-y-10">
                @foreach ([
                    ['Listen first', 'We start by understanding your business, customers, and constraints — not by pitching a stack.'],
                    ['Build in slices', 'Weekly working software, never quarterly surprises. You see progress, not status reports.'],
                    ['Own the outcome', "We're accountable to your KPIs. Code is yours, decisions are documented, handover is real."],
                ] as $i => [$t, $d])
                    <div class="grid grid-cols-[auto_1fr] gap-6 border-t border-white/15 pt-8">
                        <span class="text-sm text-brand-sky">0{{ $i + 1 }}</span>
                        <div>
                            <h3 class="text-xl font-semibold">{{ $t }}</h3>
                            <p class="mt-2 text-primary-foreground/70">{{ $d }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- TRUST --}}
    <x-section>
        <div class="grid lg:grid-cols-[1fr_2fr] gap-12 items-end">
            <x-section-header
                eyebrow="Why teams choose us"
                title="Senior craft. Operational discipline. Zero theatrics."
            />
            <ul class="grid sm:grid-cols-2 gap-4">
                @foreach (['ISO-aligned delivery', 'Senior-only engineers', 'Weekly demos', 'Source code ownership'] as $t)
                    <li class="rounded-2xl border border-hairline p-6 flex items-center gap-3">
                        <span class="h-2 w-2 rounded-full bg-brand-azure"></span>
                        <span class="font-medium">{{ $t }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-section>

    {{-- CTA --}}
    <x-section class="!pt-0">
        <div class="rounded-3xl border border-hairline bg-surface-muted p-10 md:p-16 relative overflow-hidden">
            <div class="absolute -top-20 -right-20 h-80 w-80 rounded-full bg-brand-sky/30 blur-3xl"></div>
            <div class="relative max-w-2xl">
                <h2 class="text-3xl md:text-5xl font-bold leading-[1.05]">
                    Have a product in mind? Let's pressure-test it together.
                </h2>
                <p class="mt-5 text-lg text-muted-foreground">
                    Free 30-minute consultation with a senior engineer. No decks, no
                    sales — just a candid look at what it would take to build.
                </p>
                <a href="{{ route('contact') }}" class="mt-8 inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition">
                    Book the call <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </x-section>
@endsection
