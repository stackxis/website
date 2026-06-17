@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="START A CONVERSATION"
        title="Let's talk about the architecture of your next project."
        description="Whether you are scaling a SaaS platform, deploying a custom ERP, or modernizing legacy systems, the first step is a candid conversation. No sales decks, no account managers—just a direct line to our senior engineers."
    />

    <section class="container-page py-20 grid lg:grid-cols-[1fr_1.4fr] gap-16 items-start">
        <div class="space-y-10">
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Email</h3>
                <p class="mt-3 text-xl font-medium">
                    <a href="mailto:hello@stackxis.com" class="hover:text-brand-azure transition">hello@stackxis.com</a>
                </p>
            </div>
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">WhatsApp</h3>
                <p class="mt-3 text-xl font-medium">
                    <a href="https://wa.me/94740190519" target="_blank" rel="noopener noreferrer" class="hover:text-brand-azure transition">Click to chat securely</a>
                </p>
            </div>
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">LinkedIn</h3>
                <p class="mt-3 text-xl font-medium">
                    <a href="https://www.linkedin.com/company/stackxis/" target="_blank" rel="noopener noreferrer" class="hover:text-brand-azure transition">Connect with Stackxis</a>
                </p>
            </div>
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Where we work</h3>
                <p class="mt-3 text-muted-foreground leading-relaxed">
                    Stackxis is a remote-first software development company. We operate an asynchronous, global infrastructure, seamlessly partnering with startups and enterprises across Europe, the Americas, and South Asia.
                </p>
            </div>
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Response time</h3>
                <p class="mt-3 text-muted-foreground leading-relaxed">
                    We guarantee a response within one business day. A senior architect reviews every submission — no sales decks, no account managers.
                </p>
            </div>
        </div>

        <form
            action="{{ route('contact.store') }}"
            method="POST"
            class="rounded-3xl border border-hairline bg-surface-muted p-8 md:p-10 space-y-6"
        >
            @csrf

            @if (session('sent'))
                <div class="text-center py-12">
                    <div class="inline-flex h-14 w-14 items-center justify-center rounded-full bg-primary text-primary-foreground text-2xl">✓</div>
                    <h3 class="mt-6 text-2xl font-bold">Submission received.</h3>
                    <p class="mt-3 text-muted-foreground">A senior engineer will review your project and reply within one business day.</p>
                </div>
            @else
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2">Full Name</label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            required
                            maxlength="200"
                            value="{{ old('name') }}"
                            class="w-full rounded-xl border border-hairline bg-background px-4 py-3 text-base focus:border-foreground focus:outline-none transition @error('name') border-destructive @enderror"
                        >
                        @error('name')
                            <p class="mt-1 text-sm text-destructive">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium mb-2">Work Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            required
                            maxlength="200"
                            value="{{ old('email') }}"
                            class="w-full rounded-xl border border-hairline bg-background px-4 py-3 text-base focus:border-foreground focus:outline-none transition @error('email') border-destructive @enderror"
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-destructive">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="company" class="block text-sm font-medium mb-2">Company Name &amp; Website</label>
                        <input
                            id="company"
                            name="company"
                            type="text"
                            maxlength="300"
                            value="{{ old('company') }}"
                            placeholder="Acme Inc. — acme.com"
                            class="w-full rounded-xl border border-hairline bg-background px-4 py-3 text-base focus:border-foreground focus:outline-none transition @error('company') border-destructive @enderror"
                        >
                        @error('company')
                            <p class="mt-1 text-sm text-destructive">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="project_type" class="block text-sm font-medium mb-2">What are you looking to build?</label>
                        <select
                            id="project_type"
                            name="project_type"
                            required
                            class="w-full rounded-xl border border-hairline bg-background px-4 py-3 text-base focus:border-foreground focus:outline-none transition @error('project_type') border-destructive @enderror"
                        >
                            <option value="" disabled {{ old('project_type') ? '' : 'selected' }}>Select a project type</option>
                            @foreach ([
                                'Custom Software & MVPs',
                                'Cloud ERP / Operations System',
                                'POS / Retail Architecture',
                                'Web Design & Digital Marketing',
                                'System Rescue & Modernization',
                                'Other / Not Sure Yet',
                            ] as $option)
                                <option value="{{ $option }}" @selected(old('project_type') === $option)>{{ $option }}</option>
                            @endforeach
                        </select>
                        @error('project_type')
                            <p class="mt-1 text-sm text-destructive">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium mb-2">Tell us about the project. What are your core technical bottlenecks or business goals?</label>
                    <textarea
                        id="message"
                        name="message"
                        required
                        rows="5"
                        maxlength="1500"
                        class="w-full rounded-xl border border-hairline bg-background px-4 py-3 text-base focus:border-foreground focus:outline-none transition @error('message') border-destructive @enderror"
                        placeholder="Describe the problem, current stack, timeline, and what success looks like."
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-sm text-destructive">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-primary px-7 py-4 text-sm font-medium text-primary-foreground hover:opacity-90 transition"
                >
                    Submit to Engineering Team <span aria-hidden="true">→</span>
                </button>

                <p class="text-xs text-muted-foreground">
                    By submitting, you agree we may store your details to respond. We don't share or sell data.
                </p>
            @endif
        </form>
    </section>

    <section class="border-t border-hairline">
        <div class="container-page py-20 md:py-28">
            <div class="mx-auto max-w-3xl">
                <x-section-header title="Frequently asked questions" />
                <div class="mt-12 divide-y divide-hairline border border-hairline rounded-2xl overflow-hidden bg-background">
                @foreach ([
                    [
                        'Will I be speaking with a sales representative?',
                        'No. We are an engineering-led software development agency. Your initial B2B software project consultation will always be with a senior software architect who can actually evaluate your technical needs.',
                    ],
                    [
                        'Will you sign an NDA before we discuss the project?',
                        'Absolutely. We understand the sensitivity of proprietary enterprise software. We are happy to sign a Non-Disclosure Agreement prior to our discovery call.',
                    ],
                    [
                        'Do you take over existing projects or only build from scratch?',
                        'Both. We frequently partner with scaling companies to rescue failing projects, modernize legacy architectures, and untangle complex technical debt.',
                    ],
                    [
                        'How quickly will I hear back after submitting the form?',
                        'We operate with a strict 24-hour SLA. A senior engineer will review your submission and reply within one business day.',
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
        </div>
    </section>

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-20 md:py-28 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight">Not quite ready to scope a project?</h2>
                <p class="mt-4 text-lg text-muted-foreground">
                    Explore our recent deployments, case studies, and engineering insights.
                </p>
            </div>
            <div class="flex flex-wrap gap-4 shrink-0">
                <a href="{{ route('work') }}" class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition">
                    View our work <span aria-hidden="true">→</span>
                </a>
                <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 rounded-full border border-hairline bg-background px-7 py-3.5 text-sm font-medium hover:bg-surface-muted transition">
                    Read our engineering blog <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>
@endsection

@push('head')
    <script type="application/ld+json">
        {!! json_encode([
            [
                '@context' => 'https://schema.org',
                '@type' => 'ContactPage',
                'mainEntity' => [
                    '@type' => 'Organization',
                    'name' => 'Stackxis',
                    'url' => 'https://www.stackxis.com',
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'email' => 'hello@stackxis.com',
                        'contactType' => 'Technical Sales',
                        'availableLanguage' => 'English',
                    ],
                ],
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => [
                    [
                        '@type' => 'Question',
                        'name' => 'Will I be speaking with a sales representative?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'No. We are an engineering-led software development agency. Your initial B2B software project consultation will always be with a senior software architect who can actually evaluate your technical needs.',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => 'Will you sign an NDA before we discuss the project?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'Absolutely. We understand the sensitivity of proprietary enterprise software. We are happy to sign a Non-Disclosure Agreement prior to our discovery call.',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => 'Do you take over existing projects or only build from scratch?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'Both. We frequently partner with scaling companies to rescue failing projects, modernize legacy architectures, and untangle complex technical debt.',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => 'How quickly will I hear back after submitting the form?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'We operate with a strict 24-hour SLA. A senior engineer will review your submission and reply within one business day.',
                        ],
                    ],
                ],
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush
