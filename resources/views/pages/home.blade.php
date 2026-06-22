@extends('layouts.app')

@section('content')
    {{-- HERO --}}
    <section class="relative overflow-hidden border-b border-hairline">
        <div class="absolute inset-0 hairline-grid opacity-[0.35] pointer-events-none"></div>
        <div
            class="absolute -top-32 -right-32 h-[480px] w-[480px] rounded-full bg-brand-sky/20 blur-3xl pointer-events-none">
        </div>
        <div class="container-page relative pt-28 pb-24 md:pt-40 md:pb-36">
            <div
                class="flex items-center gap-2 text-xs uppercase tracking-[0.2em] text-brand-azure font-medium animate-rise">
                <span class="h-1.5 w-1.5 rounded-full bg-brand-azure"></span>
                Driven by Tech, Ready for Next
            </div>
            <h1 class="mt-6 text-5xl md:text-7xl lg:text-8xl font-bold leading-[0.98] max-w-5xl animate-rise">
                Software that
                <span class="text-gradient-brand">earns trust</span>,
                engineered to last.
            </h1>
            <p class="mt-8 text-lg md:text-xl text-muted-foreground max-w-2xl animate-rise">
                Stackxis delivers custom web development, software solutions, ERP & POS systems, and digital marketing
                services that help businesses streamline operations, enhance customer experiences, and accelerate growth in
                the digital age.
            </p>
            <div class="mt-10 flex flex-wrap items-center gap-3 animate-rise">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition">
                    Book a consultation <span aria-hidden="true">→</span>
                </a>
                <a href="{{ route('capabilities') }}"
                    class="inline-flex items-center gap-2 rounded-full border border-hairline px-7 py-3.5 text-sm font-medium hover:border-foreground transition">
                    View capabilities
                </a>
            </div>
        </div>
    </section>


     <x-section>
        <x-section-header eyebrow="BY THE NUMBERS" title="A senior software development studio built for scale."
            description="How we engineer, deliver, and support enterprise applications and SaaS platforms." />
            <div
                class="mt-20 grid grid-cols-1 md:grid-cols-4 gap-px bg-hairline border border-hairline rounded-2xl overflow-hidden">

                @foreach ([['100%', 'Senior Engineers', 'We deploy senior engineers for hire with no junior developers. Every custom software and ERP system is architected by veterans.'], ['6', 'Core Capabilities', 'End to end software development services for B2B, covering custom ERPs, POS software, SaaS platforms, and digital marketing.'], ['14', 'Day Sprint Cycles', 'We build in slices. You receive live, working software deployments every two weeks never quarterly surprises.'], ['99.9%', 'Target Uptime', 'The Description: Production grade cloud infrastructure featuring automated DevOps pipelines and SLA backed maintenance for zero downtime scaling.']] as [$n, $l, $d])
                    <div class="bg-background p-8 md:p-10">
                        <div class="text-4xl md:text-5xl font-bold text-gradient-brand">
                            {{ $n }}
                        </div>

                        <div class="mt-3 text-sm font-semibold uppercase tracking-widest text-muted-foreground">
                            {{ $l }}
                        </div>

                        <p class="mt-4 text-sm text-muted-foreground leading-relaxed">
                            {{ $d }}
                        </p>
                    </div>
                @endforeach

            </div>
    </x-section>

    {{-- CAPABILITIES --}}
    <x-section>
        <x-section-header eyebrow="Capabilities" title="Engineering & Growth Solutions Under One Roof."
            description="From complex custom software and cloud native ERPs to revenue driving digital marketing, we provide the technical foundation to scale your entire business." />
        <div class="mt-16 grid md:grid-cols-2 gap-px bg-hairline border border-hairline rounded-3xl overflow-hidden">
            @foreach ([['01', 'Custom Software Development', 'Bespoke web and mobile applications, legacy modernization, and scalable API architectures built entirely by senior engineers.'], ['02', 'Application Services', 'Continuous cloud DevOps optimization, security compliance, and SLA backed maintenance to ensure zero downtime.'], ['03', 'ERP Development', 'Custom enterprise resource planning platforms optimized for complex inventory, finance, and supply chain logistics.'], ['04', 'POS Software', 'High volume cloud retail and restaurant point-of-sale systems featuring real time analytics and multi outlet synchronization.'], ['05', 'Web Design & Development', 'Ultra fast, high converting corporate websites and web apps engineered on modern Next.js and Tailwind CSS stacks.'], ['06', 'Digital Marketing', 'Data driven SEO, targeted B2B lead generation, and performance marketing strategies designed to drive measurable revenue.']] as [$k, $t, $d])
                <div class="bg-background p-8 md:p-12 group hover:bg-surface-muted transition-colors">
                    <div class="flex items-baseline justify-between">
                        <span class="text-xs tracking-widest text-brand-azure">{{ $k }}</span>
                        <span class="text-muted-foreground group-hover:translate-x-1 transition-transform">→</span>
                    </div>

                    <h3 class="mt-6 text-2xl font-bold">
                        {{ $t }}
                    </h3>

                    <p class="mt-3 text-muted-foreground">
                        {{ $d }}
                    </p>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- APPROACH --}}
    <section class="bg-primary text-primary-foreground">
        <div class="container-page py-24 md:py-32 grid lg:grid-cols-[1fr_1.2fr] gap-12 items-start">
            <div>
                <p class="text-xs uppercase tracking-[0.2em] text-brand-sky font-medium">OUR ENGINEERING PROCESS</p>
                <h2 class="mt-4 text-3xl md:text-5xl font-bold leading-[1.05]">
                    We measure success by deployed software and measurable revenue.
                </h2>
            </div>
            <div class="space-y-10">
                @foreach ([['Architectural Discovery', 'We analyze your business bottlenecks before writing a single line of code. From custom ERP workflows to digital marketing funnels, we architect systems built to scale.'], ['Iterative Engineering', 'Built exclusively by senior developers using modern cloud stacks. You get live, working software delivered in weekly sprints never quarterly surprises.'], ['Operate & Scale', 'We deploy with zero downtime and accelerate your growth through data driven digital marketing. You own the code; we own the performance and SLAs.']] as $i => [$t, $d])
                    <div class="grid grid-cols-[auto_1fr] gap-6 border-t border-white/15 pt-8">
                        <span class="text-sm text-brand-sky">
                            0{{ $i + 1 }}
                        </span>

                        <div>
                            <h3 class="text-xl font-semibold">
                                {{ $t }}
                            </h3>

                            <p class="mt-2 text-primary-foreground/70">
                                {{ $d }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- TRUST --}}
    <x-section>
        <div class="grid lg:grid-cols-[1fr_2fr] gap-12 items-center">
            <x-section-header eyebrow="WHY PARTNER WITH STACKXIS"
                title="Senior software engineering. Scalable architectures. Zero agency bloat." />
            <ul class="grid sm:grid-cols-2 gap-4">
                @foreach (['Enterprise Grade Architectures', '100% Senior Developers', 'Agile Software Delivery', 'Full Source Code Ownership'] as $t)
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
                    Planning a custom software project? Let's architect it to scale.
                </h2>
                <p class="mt-5 text-lg text-muted-foreground">
                    Bypass the sales pitch. Speak directly with a senior engineer for a rigorous assessment of your
                    architecture, timeline, and deliverables.
                </p>
                <a href="{{ route('contact') }}"
                    class="mt-8 inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition">
                    Book the call <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </x-section>
@endsection
