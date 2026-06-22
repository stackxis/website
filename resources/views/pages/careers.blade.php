@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="CAREERS AT STACKXIS"
        title='Join a senior <span class="text-gradient-brand"> engineering studio.</span>'
        description="We are a remote first team of developers and architects building custom ERPs, SaaS platforms, and digital infrastructure. Deep work, real autonomy, and zero agency theatrics."
        cta-text="View open roles"
        cta-href="#open-roles"
        cta-icon="↓"
    />

    <x-section>
        <h2 class="sr-only">Scale & Structure</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ([
                ['Remote First', 'Work from anywhere. We operate a fully asynchronous global infrastructure across Europe, the Americas, and South Asia.'],
                ['100% Senior', 'No junior layers. You will work alongside and learn from veteran engineers who actually care about software architecture.'],
                ['Async by Default', 'Deep work > meetings. We rely on rigorous documentation, clear PRs, and written communication to move fast.'],
                ['14 Days', 'Our maximum hiring timeline. From your first application to a final offer in two weeks. No endless interview loops.'],
            ] as [$itemTitle, $itemDesc])
                <div class="rounded-2xl bg-primary text-primary-foreground p-8 md:p-10">
                    <h3 class="text-xl font-semibold">{{ $itemTitle }}</h3>
                    <p class="mt-3 text-sm text-primary-foreground/70 leading-relaxed">{{ $itemDesc }}</p>
                </div>
            @endforeach
        </div>
    </x-section>

    <x-section class="border-t border-hairline">
        <h2 class="text-3xl md:text-5xl font-bold leading-[1.05] max-w-4xl">
            We build platforms that scale, not just tickets that close.
        </h2>
        <div class="mt-8 space-y-6 text-lg text-muted-foreground max-w-4xl leading-relaxed">
            <p>
                Stackxis is a software development company built by engineers, for engineers. We build custom ERP systems, cloud infrastructures, and high performance web applications for ambitious startups and enterprises.
            </p>
            <p>
                We don't do micromanagement or artificial deadlines. We hire elite, self directed talent, hand them complex architectural problems, and get out of their way. If you care deeply about clean code, scalable systems, and shipping products that touch millions of users, you belong here.
            </p>
        </div>
    </x-section>

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-20 md:py-28">
            <x-section-header title="Our Engineering Culture" description="What defines a Stackxis engineer?" />
            <div class="mt-16 grid md:grid-cols-2 gap-6">
                @foreach ([
                    ['01', 'fa-layer-group', 'Craft & Architecture', 'We sweat the details. From database schemas to clean API design, we believe shortcuts today equal outages tomorrow.'],
                    ['02', 'fa-shield-halved', 'Extreme Ownership', 'You build it, you own the outcome. We hand you full responsibility for your features from local environment to production.'],
                    ['03', 'fa-file-lines', 'Plain Text Clarity', 'No corporate jargon. We value clear, concise written communication, well documented code, and transparent decisions.'],
                    ['04', 'fa-clock', 'Life Balance', "Burnout doesn't produce good code. We enforce sustainable working hours, flexible schedules, and respect your offline time."],
                ] as [$n, $icon, $itemTitle, $itemDesc])
                    <div class="rounded-2xl bg-background border border-hairline p-8">
                        <div class="flex items-start gap-5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-brand-sky/20 text-brand-azure">
                                <i class="fas {{ $icon }}" aria-hidden="true"></i>
                            </div>
                            <div>
                                <span class="text-xs tracking-widest text-brand-azure">{{ $n }}</span>
                                <h3 class="mt-2 text-lg font-semibold">{{ $itemTitle }}</h3>
                                <p class="mt-3 text-muted-foreground">{{ $itemDesc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="border-t border-hairline">
        <div class="container-page py-20 md:py-28">
            <div class="relative overflow-hidden rounded-3xl border border-hairline bg-surface-muted p-6 md:p-10 lg:p-14">
                <div class="pointer-events-none absolute -right-16 -top-16 h-64 w-64 rounded-full bg-brand-sky/25 blur-3xl" aria-hidden="true"></div>
                <div class="pointer-events-none absolute -bottom-20 -left-10 h-56 w-56 rounded-full bg-brand-azure/10 blur-3xl" aria-hidden="true"></div>

                <div class="relative max-w-2xl">
                    <p class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">What you get</p>
                    <h2 class="mt-4 text-3xl md:text-5xl font-bold leading-[1.05]">The Benefits Stack</h2>
                    <p class="mt-4 text-muted-foreground leading-relaxed">
                        No ping pong tables just the things senior engineers actually optimize for when choosing where to work.
                    </p>
                </div>

                <div class="relative mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-4 md:gap-5">
                    @foreach ([
                        ['fa-chart-line', 'Top of band compensation', 'Highly competitive remote salaries based on global market rates.', 'sm:col-span-1 lg:col-span-4'],
                        ['fa-laptop', 'Modern hardware & workspace allowance', 'We fund your ideal home office setup and laptop.', 'sm:col-span-1 lg:col-span-4'],
                        ['fa-code', 'Modern Tech Stack', 'Work daily with Next.js, Node.js, TypeScript, PostgreSQL, AWS/GCP, and Tailwind.', 'sm:col-span-2 lg:col-span-4'],
                        ['fa-umbrella-beach', 'Flexible Time Off (FTO)', 'Take the time you need to recharge, no questions asked.', 'sm:col-span-1 lg:col-span-6'],
                        ['fa-graduation-cap', 'Continuous Learning', 'Stipends for AWS certifications, engineering books, and tech conferences.', 'sm:col-span-1 lg:col-span-6'],
                    ] as [$icon, $itemTitle, $itemDesc, $span])
                        <article class="group flex flex-col rounded-2xl border border-hairline bg-background p-6 md:p-8 transition-[border-color,box-shadow] hover:border-brand-azure/35 hover:shadow-lg hover:shadow-brand-azure/5 {{ $span }}">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary text-primary-foreground transition-transform group-hover:scale-105">
                                <i class="fas {{ $icon }} text-sm" aria-hidden="true"></i>
                            </div>
                            <h3 class="mt-5 text-lg font-semibold leading-snug">{{ $itemTitle }}</h3>
                            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">{{ $itemDesc }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-20 md:py-28">
            <x-section-header title="The Hiring Process" />
            <div class="mt-16 grid md:grid-cols-2 lg:grid-cols-4 gap-px bg-hairline border border-hairline rounded-2xl overflow-hidden">
                @foreach ([
                    ['Step 1', 'The Intro Call', 'A 30 minute sync with a founder to discuss your background, our roadmap, and ensure mutual alignment.'],
                    ['Step 2', 'Technical Deep-Dive', 'A 60 minute systems design conversation. No live whiteboard coding or LeetCode algorithms. Just a real discussion about architecture.'],
                    ['Step 3', 'The Founder Fit', 'A final 30 minute chat with our core leadership team to discuss how you prefer to work and your long term goals.'],
                    ['Step 4', 'The Offer', 'Clear, transparent, and prompt. We present our best offer upfront with zero exploding deadlines.'],
                ] as [$step, $itemTitle, $itemDesc])
                    <div class="bg-background p-8">
                        <div class="text-xs text-brand-azure tracking-widest uppercase">{{ $step }}</div>
                        <h3 class="mt-4 text-xl font-semibold">{{ $itemTitle }}</h3>
                        <p class="mt-2 text-sm text-muted-foreground leading-relaxed">{{ $itemDesc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="open-roles" class="border-t border-hairline scroll-mt-28">
        <div class="container-page py-20 md:py-28">
            <x-section-header title="Open remote engineering roles" />
            <div class="mt-16">
                @if ($jobs->isNotEmpty())
                    <div class="grid md:grid-cols-3 gap-6">
                        @foreach ($jobs as $job)
                            <a href="{{ $job->apply_url }}" class="group flex flex-col rounded-2xl border border-hairline bg-background p-8 hover:border-brand-azure/40 hover:bg-surface-muted transition-colors">
                                <h3 class="text-xl font-semibold group-hover:text-brand-azure transition-colors">{{ $job->title }}</h3>
                                <p class="mt-2 text-sm text-brand-azure">{{ $job->tags }}</p>
                                <p class="mt-4 text-muted-foreground flex-1">{{ $job->description }}</p>
                                <span class="mt-6 text-sm font-medium text-brand-azure">Apply via Email <span aria-hidden="true">→</span></span>
                            </a>
                        @endforeach
                    </div>
                @else
                    <x-empty-state
                        icon="fa-briefcase"
                        title="No open roles"
                        message="There are no open positions currently available. We're always interested in meeting great engineers - reach out via email below."
                    />
                @endif
            </div>
        </div>
    </section>

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-20 flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight">Ready to write some code?</h2>
                <p class="mt-4 text-lg text-muted-foreground">
                    Send an email directly to our founders. Include your GitHub, LinkedIn, or portfolio, and tell us what you want to build next.
                </p>
            </div>
            <a href="mailto:careers@stackxis.com" class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition shrink-0">
                Apply via Email <span aria-hidden="true">→</span>
            </a>
        </div>
    </section>
@endsection

@push('head')
    @if ($schemaJob)
        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org/',
                '@type' => 'JobPosting',
                'title' => $schemaJob->title,
                'description' => '<p>'.$schemaJob->description.'</p>',
                'identifier' => [
                    '@type' => 'PropertyValue',
                    'name' => 'Stackxis',
                    'value' => $schemaJob->identifier ?? 'stackxis-job',
                ],
                'datePosted' => $schemaJob->date_posted?->format('Y-m-d') ?? now()->format('Y-m-d'),
                'validThrough' => $schemaJob->valid_through?->format('Y-m-d'),
                'employmentType' => $schemaJob->employment_type,
                'hiringOrganization' => [
                    '@type' => 'Organization',
                    'name' => 'Stackxis',
                    'sameAs' => config('app.url'),
                    'logo' => config('app.url').'/images/stackxis-logo.png',
                ],
                'jobLocationType' => 'TELECOMMUTE',
                'applicantLocationRequirements' => [
                    '@type' => 'Country',
                    'name' => 'Worldwide',
                ],
                'baseSalary' => [
                    '@type' => 'MonetaryAmount',
                    'currency' => 'USD',
                    'value' => [
                        '@type' => 'QuantitativeValue',
                        'value' => 'Competitive',
                        'unitText' => 'YEAR',
                    ],
                ],
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    @endif
@endpush
