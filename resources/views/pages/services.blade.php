@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="Capabilities"
        title='Engineering that covers the <span class="text-gradient-brand">full lifecycle</span>.'
        description="From strategy and design through deployment and operations — pick one capability or hand us the whole product."
    />

    <x-section>
        <div class="grid gap-px bg-hairline border border-hairline rounded-3xl overflow-hidden lg:grid-cols-2">
            @foreach ([
                ['01', 'Product Engineering', 'End-to-end product builds — web, mobile, and APIs — delivered by senior full-stack engineers who own outcomes, not just tickets.', ['Web applications', 'Mobile apps (iOS & Android)', 'API & backend systems', 'MVP to scale-up engineering', 'Technical due diligence']],
                ['02', 'Platform & Cloud', "Production-grade infrastructure that's observable, secure, and cost-aware from day one.", ['Cloud architecture (AWS / GCP / Azure)', 'DevOps & CI/CD pipelines', 'Kubernetes & containers', 'Observability & SRE', 'Cost optimization']],
                ['03', 'Applied AI & Data', 'AI features that ship — grounded in your data, integrated into real workflows, measured in business impact.', ['LLM integrations & RAG systems', 'Agent workflows & automation', 'Data pipelines & ETL', 'Analytics & BI', 'ML model deployment']],
                ['04', 'Design Systems & UX', 'Interface design and component libraries that compound across products and teams.', ['Design systems & tokens', 'Product UX design', 'Accessibility audits', 'Prototyping & user testing', 'Brand-aligned interfaces']],
                ['05', 'Modernization & Rescue', 'Legacy systems untangled, rewritten, or wrapped — without halting your business.', ['Legacy migration', 'Monolith decomposition', 'Performance re-engineering', 'Security hardening', 'Failed-project recovery']],
                ['06', 'Embedded Teams', 'Senior engineers embedded with your team for sustained capacity, knowledge transfer, and roadmap execution.', ['Staff augmentation', 'Tech leadership on demand', 'Architecture review boards', 'Mentorship & training', 'Long-term partnerships']],
            ] as [$n, $title, $desc, $items])
                <article class="bg-background p-8 md:p-12">
                    <div class="flex items-baseline justify-between">
                        <span class="text-xs tracking-widest text-brand-azure">{{ $n }}</span>
                    </div>
                    <h2 class="mt-6 text-2xl md:text-3xl font-bold">{{ $title }}</h2>
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

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-24">
            <h2 class="text-3xl md:text-5xl font-bold max-w-3xl leading-[1.05]">How an engagement actually works.</h2>
            <div class="mt-16 grid md:grid-cols-4 gap-px bg-hairline border border-hairline rounded-2xl overflow-hidden">
                @foreach ([
                    ['Discover', 'Two-week sprint to align on outcomes, scope, and technical strategy.'],
                    ['Architect', 'We design the system, surface trade-offs, and lock the foundation.'],
                    ['Build', 'Weekly working software with full visibility into progress and decisions.'],
                    ['Operate', 'Hand-over, runbooks, and ongoing support — on your terms.'],
                ] as $i => [$t, $d])
                    <div class="bg-background p-8">
                        <div class="text-xs text-brand-azure tracking-widest">PHASE 0{{ $i + 1 }}</div>
                        <h3 class="mt-4 text-xl font-semibold">{{ $t }}</h3>
                        <p class="mt-2 text-sm text-muted-foreground">{{ $d }}</p>
                    </div>
                @endforeach
            </div>
            <div class="mt-12">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition">
                    Scope your engagement <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>
@endsection
