@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="CORE CAPABILITIES"
        title='End-to-End Software Development Services for <span class="text-gradient-brand">B2B</span>.'
        description="From strategy and architecture through to cloud deployment, we operate as your dedicated engineering partner. We build custom software, enterprise ERPs, and digital marketing engines that scale your business."
        cta-text="Scope your project"
        :cta-href="route('contact')"
    />

    <x-section>
        <div class="grid gap-px bg-hairline border border-hairline rounded-3xl overflow-hidden lg:grid-cols-2">
            @foreach ([
                ['01', 'Custom Software Development', 'Bespoke web and mobile applications, legacy modernization, and scalable API architectures delivered by senior-only engineers.', ['React, Next.js, and Node.js ecosystems', 'API & backend system architecture', 'MVP to scale-up product engineering', 'Monolith decomposition & rescue']],
                ['02', 'ERP System Development', 'Cloud-native enterprise resource planning platforms engineered for complex inventory, finance, and supply chain logistics.', ['Custom logistics & warehouse management', 'Multi-tenant SaaS ERP architectures', 'Legacy ERP cloud migrations', 'Third-party API system integration']],
                ['03', 'POS Software Solutions', 'High-throughput cloud point-of-sale systems built for retail chains and restaurant groups requiring real-time data sync.', ['Multi-outlet inventory synchronization', 'Online ordering & delivery platform integration', 'Secure payment infrastructure (PCI/KYC)', 'Real-time analytics & reporting dashboards']],
                ['04', 'Cloud Infrastructure & Application Services', 'Production-grade DevOps, SLA-backed maintenance, and cloud architecture to ensure zero downtime and optimal scalability.', ['AWS, GCP, & Azure cloud architecture', 'Kubernetes & containerized deployments', 'CI/CD pipeline automation', 'Cost-optimization & security hardening']],
                ['05', 'Applied AI & Data Engineering', 'Custom LLM integrations and data pipelines engineered to automate workflows and drive measurable business impact.', ['Enterprise LLM & RAG system integration', 'AI agent workflow automation', 'ETL data pipelines (Snowflake, BigQuery)', 'Predictive analytics & recommendation engines']],
                ['06', 'B2B Digital Marketing & Web Design', 'High-converting Next.js marketing hubs combined with data-driven SEO strategies to generate qualified enterprise pipeline.', ['Performance-first Web Design (Core Web Vitals)', 'Technical & Content SEO strategies', 'B2B Lead generation & CRO', 'Design systems & component libraries']],
            ] as [$n, $capability, $desc, $items])
                @php
                    $capabilityId = match ($n) {
                        '01' => 'custom-software',
                        '02' => 'erp',
                        '03' => 'pos',
                        default => null,
                    };
                @endphp
                <article @if ($capabilityId) id="{{ $capabilityId }}" @endif class="bg-background p-8 md:p-12 scroll-mt-28">
                    <div class="flex items-baseline justify-between">
                        <span class="text-xs tracking-widest text-brand-azure">{{ $n }}</span>
                    </div>
                    <h2 class="mt-6 text-2xl md:text-3xl font-bold">{{ $capability }}</h2>
                    <p class="mt-3 text-muted-foreground">{{ $desc }}</p>
                    <ul class="mt-6 space-y-2.5">
                        @foreach ($items as $item)
                            <li class="flex items-start gap-3 text-sm">
                                <span class="mt-2 h-1 w-3 bg-brand-azure shrink-0"></span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </x-section>

    <x-section>
        <x-section-header title="Production-grade technologies we master." />

        @php
            $technologies = [
                ['Next.js', 'nextdotjs', '000000'],
                ['React', 'react', '61DAFB'],
                ['Node.js', 'nodedotjs', '339933'],
                ['Laravel', 'laravel', 'FF2D20'],
                ['Python', 'python', '3776AB'],
                ['Tailwind', 'tailwindcss', '06B6D4'],
                ['PostgreSQL', 'postgresql', '4169E1'],
                ['MySQL', 'mysql', '4479A1'],
                ['Docker', 'docker', '2496ED'],
                ['Kubernetes', 'kubernetes', '326CE5'],
                ['AWS', null, null, asset('images/tech/aws.svg')],
                ['GCP', 'googlecloud', '4285F4'],
            ];
        @endphp

        <div class="tech-marquee mt-12" role="region" aria-label="Technologies we master">
            <div class="tech-marquee__track">
                @foreach (array_merge($technologies, $technologies) as $i => $tech)
                    @php
                        [$name, $icon, $color, $src] = array_pad($tech, 4, null);
                        $imgSrc = $src ?? "https://cdn.simpleicons.org/{$icon}/{$color}";
                    @endphp
                    <div class="tech-marquee__item" @if ($i >= count($technologies)) aria-hidden="true" @endif>
                        <img
                            src="{{ $imgSrc }}"
                            alt="{{ $name }}"
                            width="64"
                            height="64"
                            loading="lazy"
                            class="tech-marquee__logo"
                        >
                        <span class="tech-marquee__name">{{ $name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>

    <x-section>
        <x-section-header title="How to integrate our engineers with your team." />
        <div class="mt-12 grid md:grid-cols-3 gap-px bg-hairline border border-hairline rounded-2xl overflow-hidden">
            @foreach ([
                ['Dedicated Product Teams', 'Hand us the entire roadmap. We handle the architecture, development, and deployment from end to end.'],
                ['Embedded Senior Talent', 'Scale your existing capability. We integrate our senior developers directly into your sprints for sustained velocity.'],
                ['System Modernization', 'Bring us your legacy code or failing projects. We audit, untangle, and rebuild for performance and security.'],
            ] as [$title, $desc])
                <div class="bg-background p-8 md:p-10">
                    <h3 class="text-xl font-semibold">{{ $title }}</h3>
                    <p class="mt-3 text-sm text-muted-foreground leading-relaxed">{{ $desc }}</p>
                </div>
            @endforeach
        </div>
    </x-section>

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-24">
            <h2 class="text-3xl md:text-5xl font-bold max-w-3xl leading-[1.05]">How a Stackxis engagement actually works.</h2>
            <div class="mt-16 grid md:grid-cols-4 gap-px bg-hairline border border-hairline rounded-2xl overflow-hidden">
                @foreach ([
                    ['Discover & Audit', 'Two-week strategic sprint to align on business outcomes, map constraints, and define the software architecture.'],
                    ['Architect & Design', 'We engineer the system blueprint, surface technical trade-offs, and establish a secure cloud foundation.'],
                    ['Iterative Build', 'Weekly working software delivered in agile sprints. Full visibility into progress, code, and architectural decisions.'],
                    ['Operate & Scale', 'Seamless deployment, SLA-backed continuous support, and proactive performance optimization on your terms.'],
                ] as $i => [$t, $d])
                    <div class="bg-background p-8">
                        <div class="text-xs text-brand-azure tracking-widest">PHASE 0{{ $i + 1 }}</div>
                        <h3 class="mt-4 text-xl font-semibold">{{ $t }}</h3>
                        <p class="mt-2 text-sm text-muted-foreground">{{ $d }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-section>
        <x-section-header title="Software that drives measurable outcomes." />
        <div class="mt-12 grid md:grid-cols-2 gap-px bg-hairline border border-hairline rounded-2xl overflow-hidden">
            @foreach ([
                ['Custom ERP Logistics', 'Reduced warehouse processing latency by 40% with a cloud-native Node.js architecture.'],
                ['SaaS Platform Scale', 'Migrated a monolithic architecture to AWS microservices, achieving 99.99% uptime during peak load.'],
            ] as [$title, $desc])
                <article class="bg-background p-8 md:p-10">
                    <h3 class="text-xl font-semibold">{{ $title }}</h3>
                    <p class="mt-3 text-muted-foreground">{{ $desc }}</p>
                </article>
            @endforeach
        </div>
    </x-section>

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-20 md:py-28">
            <x-section-header title="Frequently asked questions about our services." />
            <div class="mt-12 max-w-3xl divide-y divide-hairline border border-hairline rounded-2xl overflow-hidden bg-background">
                @foreach ([
                    [
                        'Do you work with existing in-house engineering teams?',
                        'Yes. Through our Embedded Senior Talent model, we integrate directly into your sprints, tooling, and ceremonies — adding senior capacity without disrupting how your team already works.',
                    ],
                    [
                        'How do you price custom software development?',
                        'We operate on dedicated team retainers for ongoing product work, or fixed-scope discovery phases when requirements need definition first. Every engagement starts with a transparent scope conversation — no surprise change orders.',
                    ],
                    [
                        'Do you offer SLA-backed maintenance post-launch?',
                        'Yes. Our Cloud Infrastructure & Application Services division provides SLA-backed maintenance, proactive monitoring, security patching, and performance optimization after launch.',
                    ],
                ] as [$question, $answer])
                    <details class="group">
                        <summary class="flex cursor-pointer items-center justify-between gap-4 p-6 text-left font-medium list-none [&::-webkit-details-marker]:hidden">
                            {{ $question }}
                            <span class="text-muted-foreground transition-transform group-open:rotate-45" aria-hidden="true">+</span>
                        </summary>
                        <p class="px-6 pb-6 text-sm text-muted-foreground leading-relaxed">{{ $answer }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <x-section class="!pt-0">
        <div class="rounded-3xl border border-hairline bg-surface-muted p-10 md:p-16 relative overflow-hidden">
            <div class="absolute -top-20 -right-20 h-80 w-80 rounded-full bg-brand-sky/30 blur-3xl"></div>
            <div class="relative max-w-2xl">
                <h2 class="text-3xl md:text-5xl font-bold leading-[1.05]">
                    Have a complex software project in mind? Let's architect it together.
                </h2>
                <p class="mt-5 text-lg text-muted-foreground">
                    Free 30-minute consultation with a senior engineer. No sales decks — just a candid look at what it would take to build your platform.
                </p>
                <a href="{{ route('contact') }}"
                    class="mt-8 inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition">
                    Book a technical consultation <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </x-section>

    @php
        $faqSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'Do you work with existing in-house engineering teams?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. Through our Embedded Senior Talent model, we integrate directly into your sprints, tooling, and ceremonies — adding senior capacity without disrupting how your team already works.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How do you price custom software development?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We operate on dedicated team retainers for ongoing product work, or fixed-scope discovery phases when requirements need definition first. Every engagement starts with a transparent scope conversation — no surprise change orders.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do you offer SLA-backed maintenance post-launch?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. Our Cloud Infrastructure & Application Services division provides SLA-backed maintenance, proactive monitoring, security patching, and performance optimization after launch.',
                    ],
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endsection
