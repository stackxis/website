@extends('layouts.app')

@section('content')
    <x-page-hero eyebrow="START A CONVERSATION"
        title='Let&apos;s talk about the architecture of your <span class="text-gradient-brand">next project.</span>'
        description="Whether you are scaling a SaaS platform, deploying a custom ERP, or modernizing legacy systems, the first step is a candid conversation. No sales decks, no account managers just a direct line to our senior engineers." />

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
                    <a href="https://wa.me/94740190589" target="_blank" rel="noopener noreferrer"
                        class="hover:text-brand-azure transition">+94 740 190 589</a>
                </p>
            </div>
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Where we work</h3>
                <p class="mt-3 text-muted-foreground leading-relaxed">
                    Stackxis is a remote - first software development company. We operate an asynchronous, global
                    infrastructure, seamlessly partnering with startups and enterprises across Europe, the Americas, and
                    South Asia.
                </p>
            </div>
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">
                    Follow Us
                </h3>

                <div class="mt-4 flex flex-wrap gap-8">

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/company/stackxis/" target="_blank"
                        class="text-xl transition-all duration-300 hover:scale-110 hover:text-primary">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/stackxis" target="_blank"
                        class="text-xl transition-all duration-300 hover:scale-110 hover:text-primary">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/stackxis_" target="_blank"
                        class="text-xl transition-all duration-300 hover:scale-110 hover:text-primary">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@stackxis" target="_blank"
                        class="text-xl transition-all duration-300 hover:scale-110 hover:text-primary">
                        <i class="fab fa-tiktok"></i>
                    </a>

                    <!-- X (Twitter) -->
                    <a href="https://x.com/stackxis" target="_blank"
                        class="text-xl transition-all duration-300 hover:scale-110 hover:text-primary">
                        <i class="fab fa-x-twitter "></i>
                    </a>


                </div>
            </div>
        </div>
        <form action="{{ route('contact.store') }}" method="POST"
            class="rounded-3xl border border-hairline bg-surface-muted p-8 md:p-10 space-y-6">
            @csrf

            @if (session('sent'))
                <div class="rounded-xl border border-green-500/30 bg-green-500/10 px-4 py-3 text-sm text-green-700 dark:text-green-300">
                    Thanks for reaching out. We received your message and will get back to you within one business day.
                </div>
            @endif

            @if ($errors->any())
                <div class="rounded-xl border border-red-500/30 bg-red-500/10 px-4 py-3 text-sm text-red-700 dark:text-red-300">
                    <ul class="space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid md:grid-cols-2 gap-6">

                <!-- Full Name -->
                <div>
                    <label for="name" class="block text-sm font-medium mb-2">
                        Full Name
                    </label>
                    <input id="name" name="name" type="text" required maxlength="200" value="{{ old('name') }}"
                        placeholder="Sithum Sanjana"
                        class="w-full rounded-xl border border-hairline bg-background px-4 py-3">
                </div>

                <!-- Business Name -->
                <div>
                    <label for="business_name" class="block text-sm font-medium mb-2">
                        Business Name
                    </label>
                    <input id="business_name" name="business_name" type="text" maxlength="200"
                        value="{{ old('business_name') }}" placeholder="StackXis Technologies Ltd."
                        class="w-full rounded-xl border border-hairline bg-background px-4 py-3">
                </div>

            </div>

            <div class="grid md:grid-cols-2 gap-6">

                <!-- Business Email -->
                <div>
                    <label for="email" class="block text-sm font-medium mb-2">
                        Business Email
                    </label>
                    <input id="email" name="email" type="email" required maxlength="200" value="{{ old('email') }}"
                        placeholder="example@gmail.com"
                        class="w-full rounded-xl border border-hairline bg-background px-4 py-3">
                </div>

                <!-- Contact Number -->
                <div>
                    <label for="phone" class="block text-sm font-medium mb-2">
                        Contact Number
                    </label>
                    <input id="phone" name="phone" type="tel" required maxlength="20" value="{{ old('phone') }}"
                        placeholder="+94 77 123 4567"
                        class="w-full rounded-xl border border-hairline bg-background px-4 py-3">
                </div>

            </div>

            <!-- Project Type -->
            <div>
                <label for="project_type" class="block text-sm font-medium mb-2">
                    What Are You Looking to Build?
                </label>

                <select id="project_type" name="project_type" required
                    class="w-full rounded-xl border border-hairline bg-background px-4 py-3">
                    <option value="" disabled selected>
                        Select a project type
                    </option>
                    <option>Custom Software Development</option>
                    <option>Web Application</option>
                    <option>Mobile Application</option>
                    <option>SaaS Platform</option>
                    <option>ERP System</option>
                    <option>POS System</option>
                    <option>E-Commerce Website</option>
                    <option>UI/UX Design</option>
                    <option>Digital Marketing</option>
                    <option>Other</option>
                </select>
            </div>

            <!-- Message -->
            <div>
                <label for="message" class="block text-sm font-medium mb-2">
                    How Can We Help You?
                </label>

                <textarea id="message" name="message" rows="6" maxlength="1500"
                    placeholder="Tell us about your project, goals, required features, expected timeline, and any challenges you're facing."
                    class="w-full rounded-xl border border-hairline bg-background px-4 py-3">{{ old('message') }}</textarea>
            </div>

            <button type="submit"
                class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-primary px-7 py-4 text-sm font-medium text-primary-foreground hover:opacity-90 transition">
                Request a Free Consultation →
            </button>

            <p class="text-xs text-muted-foreground">
                We typically respond within 24 hours. Your information is kept confidential and will never be shared.
            </p>

        </form>
    </section>

    <section class="border-t border-hairline">
        <div class="container-page py-20 md:py-28">
            <div class="mx-auto max-w-3xl">
                <x-section-header title="Frequently asked questions" />
                <div
                    class="mt-12 divide-y divide-hairline border border-hairline rounded-2xl overflow-hidden bg-background">
                    @foreach ([['Will I be speaking with a sales representative?', 'No. We are an engineering-led software development agency. Your initial B2B software project consultation will always be with a senior software architect who can actually evaluate your technical needs.'], ['Will you sign an NDA before we discuss the project?', 'Absolutely. We understand the sensitivity of proprietary enterprise software. We are happy to sign a Non-Disclosure Agreement prior to our discovery call.'], ['Do you take over existing projects or only build from scratch?', 'Both. We frequently partner with scaling companies to rescue failing projects, modernize legacy architectures, and untangle complex technical debt.'], ['How quickly will I hear back after submitting the form?', 'We operate with a strict 24-hour SLA. A senior engineer will review your submission and reply within one business day.']] as [$question, $answer])
                        <details class="group">
                            <summary
                                class="flex cursor-pointer items-center justify-between gap-4 p-6 text-left font-medium list-none [&::-webkit-details-marker]:hidden">
                                {{ $question }}
                                <span class="text-muted-foreground transition-transform group-open:rotate-45"
                                    aria-hidden="true">+</span>
                            </summary>
                            <p class="px-6 pb-6 text-sm text-muted-foreground leading-relaxed">{{ $answer }}</p>
                        </details>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{--
    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-20 md:py-28 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight">Not quite ready to scope a project?</h2>
                <p class="mt-4 text-lg text-muted-foreground">
                    Explore our recent deployments, case studies, and engineering insights.
                </p>
            </div>
            <div class="flex flex-wrap gap-4 shrink-0">
                <a href="{{ route('work') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition">
                    View our work <span aria-hidden="true">→</span>
                </a>
                <a href="{{ route('blog') }}"
                    class="inline-flex items-center gap-2 rounded-full border border-hairline bg-background px-7 py-3.5 text-sm font-medium hover:bg-surface-muted transition">
                    Read our engineering blog <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section> --}}
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
                            'text' => 'No. We are an engineering led software development agency. Your initial B2B software project consultation will always be with a senior software architect who can actually evaluate your technical needs.',
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
                            'text' => 'We operate with a strict 24 hour SLA. A senior engineer will review your submission and reply within one business day.',
                        ],
                    ],
                ],
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush
