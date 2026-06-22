@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="Expertise"
        title='Domains we know. Tools we <span class="text-gradient-brand">trust</span>.'
        description="Depth in regulated, complex industries paired with a modern, opinionated technology stack."
    />

    <x-section>
        <x-section-header eyebrow="Domains" title="Where we've shipped the most." />
        <div class="mt-12 grid md:grid-cols-2 lg:grid-cols-3 gap-px bg-hairline border border-hairline rounded-3xl overflow-hidden">
            @foreach ([
                ['Fintech & Payments', 'Trading platforms, ledgers, KYC pipelines, and compliance-grade infrastructure.'],
                ['Healthcare & Life Sciences', 'HIPAA-aware platforms, clinical workflows, and research data systems.'],
                ['SaaS & B2B Platforms', 'Multi tenant products, billing engines, and operator grade admin tooling.'],
                ['Logistics & Supply Chain', 'Real time tracking, optimization engines, and partner integrations.'],
                ['Media & Marketplaces', 'High throughput content platforms, search, and recommendation systems.'],
                ['Climate & Energy', 'Monitoring, forecasting, and operational tooling for the energy transition.'],
            ] as [$t, $d])
                <div class="bg-background p-8 hover:bg-surface-muted transition">
                    <h3 class="text-lg font-semibold">{{ $t }}</h3>
                    <p class="mt-3 text-sm text-muted-foreground">{{ $d }}</p>
                </div>
            @endforeach
        </div>
    </x-section>

    <section class="border-t border-hairline bg-primary text-primary-foreground">
        <div class="container-page py-24">
            <x-section-header eyebrow="Stack" title="A modern, deliberate toolkit." />
            <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ([
                    'Frontend' => ['React', 'Next.js', 'TanStack', 'TypeScript', 'Tailwind', 'React Native'],
                    'Backend' => ['Node.js', 'Python', 'Go', 'Rust', 'PostgreSQL', 'Redis'],
                    'Cloud' => ['AWS', 'GCP', 'Azure', 'Kubernetes', 'Terraform', 'Cloudflare'],
                    'Data' => ['Snowflake', 'BigQuery', 'dbt', 'Airflow', 'Kafka', 'ClickHouse'],
                    'AI' => ['OpenAI', 'Anthropic', 'LangChain', 'pgvector', 'Pinecone', 'Hugging Face'],
                    'Quality' => ['Playwright', 'Vitest', 'k6', 'Sentry', 'OpenTelemetry', 'Datadog'],
                ] as $cat => $items)
                    <div class="border-t border-white/15 pt-6">
                        <h4 class="text-xs uppercase tracking-[0.2em] text-brand-sky font-medium">{{ $cat }}</h4>
                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach ($items as $item)
                                <span class="rounded-full border border-white/20 px-3 py-1 text-sm">{{ $item }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="mt-12 text-primary-foreground/70 max-w-2xl">
                We're stack pragmatic. The list above is what we reach for most often not a religion. The right tool is the one your team can operate at 2am.
            </p>
        </div>
    </section>
@endsection
