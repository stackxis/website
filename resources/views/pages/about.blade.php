@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="About"
        title='A studio of engineers who believe software should <span class="text-gradient-brand">behave</span>.'
        description="We exist for teams who care about how their product is built — not just whether it ships. Reliability, clarity, and craft are non-negotiable."
    />

    <x-section>
        <div class="grid lg:grid-cols-2 gap-16">
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Mission</h3>
                <p class="mt-4 text-2xl md:text-3xl font-semibold leading-tight">
                    Build the software our clients would have built themselves — if they had the time and a senior team.
                </p>
            </div>
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Vision</h3>
                <p class="mt-4 text-2xl md:text-3xl font-semibold leading-tight">
                    A world where every business operates on software it actually trusts.
                </p>
            </div>
        </div>
    </x-section>

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-24">
            <x-section-header eyebrow="Values" title="Principles, not posters." />
            <div class="mt-16 grid md:grid-cols-3 gap-6">
                @foreach ([
                    ['Craft over speed', "We move fast because we move correctly. Shortcuts become tomorrow's outages."],
                    ['Plain language', 'No jargon, no hand-waving. We explain trade-offs so you can make the call.'],
                    ['Skin in the game', "We treat your roadmap like our own — because retention is the only metric that matters."],
                    ['Documented by default', 'Architecture, decisions, runbooks. Your team should never depend on us to operate.'],
                    ['Quiet competence', "We'd rather be excellent than loud. The work speaks first."],
                    ['Long-term thinking', "Today's code is tomorrow's foundation. We build for the version you don't see yet."],
                ] as [$t, $d])
                    <div class="rounded-2xl bg-background border border-hairline p-8">
                        <h4 class="text-lg font-semibold">{{ $t }}</h4>
                        <p class="mt-3 text-muted-foreground">{{ $d }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-section>
        <div class="grid lg:grid-cols-[1fr_1.5fr] gap-12">
            <x-section-header eyebrow="Our story" title="Started by engineers tired of seeing software fail in production." />
            <div class="space-y-6 text-lg text-muted-foreground">
                <p>
                    Stackxis began with a simple observation: most software projects don't fail because of technology — they fail because of decisions. Wrong scope, wrong team shape, wrong trade-offs at the wrong moment.
                </p>
                <p>
                    We assembled a small team of senior engineers who'd spent a decade watching this pattern repeat across startups and enterprises alike. We built the studio we wished we could have hired.
                </p>
                <p>
                    Today, we partner with founders shipping their first product and operators modernizing platforms that touch millions of users. The bar is the same: build software that earns trust, every day it runs.
                </p>
            </div>
        </div>
    </x-section>

    <section class="border-t border-hairline">
        <div class="container-page py-20 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <h2 class="text-3xl md:text-4xl font-bold leading-tight max-w-2xl">Curious how we'd approach your project?</h2>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition shrink-0">
                Talk to us <span aria-hidden="true">→</span>
            </a>
        </div>
    </section>
@endsection
