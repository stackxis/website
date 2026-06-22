@extends('layouts.app')

@section('content')
    <x-page-hero eyebrow="ABOUT STACKXIS"
        title='A senior software engineering studio built by developers, for <span class="text-gradient-brand">ambitious teams</span>.'
        description="We are a remote first software development company. We exist for founders and CTOs who care deeply about how their product is architected not just whether it ships. Reliability, clarity, and technical craft are non negotiable." />

    <x-section>
        <x-section-header eyebrow="BY THE NUMBERS" title="Built by engineers. Structured for enterprise delivery." />
        <div
            class="mt-16 grid grid-cols-1 md:grid-cols-4 gap-px bg-hairline border border-hairline rounded-2xl overflow-hidden">
            @foreach ([['100%', 'Senior Engineers', 'No junior layers. Every line of code is written by veteran developers.'], ['Zero', 'Agency Theatrics', 'Direct access to the engineers building your custom software.'], ['2025', 'Founded', 'Started by three engineers tired of watching software fail in production.'], ['3', 'Continents', 'A truly global, async first team supporting worldwide enterprise clients.']] as [$n, $l, $d])
                <div class="bg-background p-8 md:p-10">
                    <div class="text-4xl md:text-5xl font-bold text-gradient-brand">{{ $n }}</div>
                    <div class="mt-3 text-sm font-semibold uppercase tracking-widest text-muted-foreground">
                        {{ $l }}</div>
                    <p class="mt-4 text-sm text-muted-foreground leading-relaxed">{{ $d }}</p>
                </div>
            @endforeach
        </div>
    </x-section>

    <x-section>
        <div class="grid lg:grid-cols-2 gap-16">
            <div>
                <h2 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Mission</h2>
                <p class="mt-4 text-2xl md:text-3xl font-semibold leading-tight">
                    To build the custom software, cloud ERPs, and digital platforms our clients would have built themselves
                    if they had the time and a dedicated senior team.
                </p>
            </div>
            <div>
                <h2 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Vision</h2>
                <p class="mt-4 text-2xl md:text-3xl font-semibold leading-tight">
                    A digital ecosystem where every enterprise operates on scalable, modern software it actually trusts.
                </p>
            </div>
        </div>
    </x-section>

    <x-section>
        <div class="grid lg:grid-cols-[1fr_1.5fr] gap-12">
            <x-section-header eyebrow="How we began"
                title="Started by engineers tired of seeing software fail in production." />
            <div class="space-y-6 text-lg text-muted-foreground">
                <p>
                    Stackxis began with a simple observation: most software projects don't fail because of technology they
                    fail because of poor architectural decisions. Wrong scope, bloated agency teams, and the wrong
                    trade offs made at the worst possible moments.
                </p>
                <p>
                    We assembled a small team of senior engineers who had spent a decade watching this pattern repeat across
                    startups and enterprises. We decided to build the reliable software development agency we always wished
                    we could have hired.
                </p>
                <p>
                    Today, we operate as an end to end engineering partner. Whether we are building custom software,
                    engineering complex ERPs, or driving growth through B2B digital marketing, the bar remains the same:
                    build platforms that earn trust, every single day they run.
                </p>
            </div>
        </div>
    </x-section>

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-24">
            <x-section-header title="Engineering solutions for complex industries."
                description="We don't build generic brochure sites. We partner with CTOs, technical founders, and enterprise operators solving high stakes problems." />
            <div class="mt-16 grid md:grid-cols-2 gap-px bg-hairline border border-hairline rounded-2xl overflow-hidden">
                @foreach ([['Funded Startups & SaaS', 'Accelerating MVP development and scaling multi tenant SaaS architectures.', route('capabilities') . '#custom-software'], ['Supply Chain & Logistics', 'Modernizing legacy systems and building cloud native inventory ERPs.', route('capabilities') . '#erp'], ['Retail & Hospitality', 'Deploying high throughput, multi outlet POS software systems.', route('capabilities') . '#pos'], ['Fintech & Healthcare', 'Engineering highly secure, compliant data pipelines and payment infrastructures.', route('expertise')]] as [$industryTitle, $industryDesc, $industryLink])
                    <a href="{{ $industryLink }}"
                        class="group bg-background p-8 md:p-10 hover:bg-surface-muted transition-colors">


                        <div class="flex items-start justify-between gap-4">

                            <h3 class="text-xl font-semibold">
                                {{ $industryTitle }}
                            </h3>


                            <span class="text-muted-foreground group-hover:translate-x-1 transition-transform shrink-0">
                                →
                            </span>

                        </div>


                        <p class="mt-3 text-muted-foreground">
                            {{ $industryDesc }}
                        </p>


                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="border-t border-hairline">
        <div class="container-page py-24">
            <x-section-header eyebrow="Values" title="Principles, not posters." />
            <div class="mt-16 grid md:grid-cols-3 gap-6">
                @foreach ([['01', 'Craft over speed', "Shortcuts in architecture become tomorrow's production outages."], ['02', 'Documented by default', 'Clean API documentation and runbooks. Your team should never depend on us to operate.'], ['03', 'Skin in the game', 'We treat your roadmap like our own. Client retention is our only metric.'], ['04', 'Plain language', 'No jargon. We explain technical trade offs clearly so you can make the right call.'], ['05', 'Quiet competence', 'The source code, cloud infrastructure, and deployed software speak first.'], ['06', 'Long term thinking', "We engineer scalable systems built for the traffic you don't even have yet."]] as [$n, $t, $d])
                    <div class="rounded-2xl bg-background border border-hairline p-8">
                        <span class="text-xs tracking-widest text-brand-azure">{{ $n }}</span>
                        <h3 class="mt-4 text-lg font-semibold">{{ $t }}</h3>
                        <p class="mt-3 text-muted-foreground">{{ $d }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-section>
        <x-section-header title="A remote first software studio operating worldwide." />
        <p class="mt-8 text-lg text-muted-foreground max-w-4xl leading-relaxed">
            Great engineering isn't confined by geography. Stackxis operates on a rigorous, async first infrastructure. With
            technical talent anchored in South Asia and team members collaborating across Europe and the Americas, we
            provide enterprise grade software development services to a global client base without the traditional agency
            overhead.
        </p>
    </x-section>

    {{-- <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-24">
            <x-section-header title="The engineers behind the code." />
            <div class="mt-16 grid md:grid-cols-3 gap-6">
                @foreach ($founders as $founder)
                    <article class="rounded-2xl bg-background border border-hairline p-8">
                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-brand-sky/40 to-brand-azure/20 text-lg font-semibold text-brand-azure">
                            {{ $founder['initials'] }}
                        </div>
                        <h3 class="mt-6 text-xl font-semibold">{{ $founder['name'] }}</h3>
                        <p class="mt-1 text-sm text-brand-azure font-medium">{{ $founder['role'] }}</p>
                        <p class="mt-4 text-muted-foreground">{{ $founder['bio'] }}</p>
                        <a href="{{ $founder['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="mt-6 inline-flex items-center gap-2 text-sm font-medium hover:text-brand-azure transition">
                            LinkedIn <span aria-hidden="true">→</span>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section> --}}

    <section class="border-t border-hairline">
        <div class="container-page py-20 flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight">Curious how we would approach your project?</h2>
                <p class="mt-4 text-lg text-muted-foreground">
                    Speak directly with a senior engineer. No sales decks just a candid look at your architecture.
                </p>
            </div>
            <a href="{{ route('contact') }}"
                class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition shrink-0">
                Book a technical consultation <span aria-hidden="true">→</span>
            </a>
        </div>
    </section>
@endsection
