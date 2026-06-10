@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="Selected work"
        title='Builds that <span class="text-gradient-brand">earned</span> their place in production.'
        description="A few examples from our recent engagements. Names withheld where partnerships require it — we'll walk through specifics on a call."
    />

    <x-section>
        <div class="grid gap-px bg-hairline border border-hairline rounded-3xl overflow-hidden">
            @foreach ([
                ['Fintech', 'Real-time settlement platform', 'Re-architected a monolithic ledger into an event-sourced platform handling 4M+ daily transactions with sub-100ms latency.', [['10×', 'Throughput'], ['−72%', 'Infra cost'], ['99.99%', 'Uptime']]],
                ['Healthcare', 'Clinical operations workspace', 'Built a multi-tenant SaaS for clinical operations — workflow engine, audit log, and HL7/FHIR integrations.', [['18 wks', 'MVP to launch'], ['3', 'Hospital systems live'], ['A+', 'Security audit']]],
                ['SaaS', 'AI-powered support copilot', 'Designed and shipped an LLM-grounded agent for a B2B support team — including RAG, evaluation, and observability.', [['42%', 'Tickets auto-resolved'], ['6×', 'First-response time'], ['12 wks', 'From kickoff']]],
                ['Logistics', 'Fleet optimization engine', 'Routing and dispatch system combining live telemetry, ML demand forecasting, and a driver-facing mobile app.', [['−23%', 'Fuel cost'], ['+31%', 'On-time rate'], ['8 mo', 'Payback']]],
            ] as [$sector, $title, $summary, $metrics])
                <article class="bg-background p-8 md:p-12 grid lg:grid-cols-[1fr_2fr_1.2fr] gap-8 items-start">
                    <div>
                        <span class="inline-block rounded-full border border-hairline px-3 py-1 text-xs uppercase tracking-widest text-muted-foreground">{{ $sector }}</span>
                    </div>
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold leading-tight">{{ $title }}</h3>
                        <p class="mt-3 text-muted-foreground">{{ $summary }}</p>
                    </div>
                    <dl class="grid grid-cols-3 gap-4">
                        @foreach ($metrics as [$v, $l])
                            <div>
                                <dt class="text-2xl font-bold text-gradient-brand">{{ $v }}</dt>
                                <dd class="mt-1 text-xs text-muted-foreground uppercase tracking-widest">{{ $l }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </article>
            @endforeach
        </div>
    </x-section>

    <section class="border-t border-hairline">
        <div class="container-page py-20 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <h2 class="text-3xl md:text-4xl font-bold leading-tight max-w-2xl">Want a closer look? We'll walk through architecture, trade-offs, and outcomes.</h2>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition shrink-0">
                Request a walkthrough <span aria-hidden="true">→</span>
            </a>
        </div>
    </section>
@endsection
