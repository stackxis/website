@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="Join"
        title='Senior craft. <span class="text-gradient-brand">Real autonomy.</span> Work that ships.'
        description="We're a small, deliberate studio. We hire slowly, pay well, and protect focus. If that sounds like the team you've been looking for, read on."
    />

    <x-section>
        <x-section-header eyebrow="Culture" title="What it's actually like here." />
        <div class="mt-12 grid md:grid-cols-3 gap-6">
            @foreach ([
                ['Senior by default', 'No junior gauntlet. Everyone here has shipped systems people depend on.'],
                ['Async-first', 'Deep work is sacred. Meetings exist to unblock, not to populate calendars.'],
                ['Outcome-owned', 'You own the work end-to-end — from kickoff conversation to production support.'],
                ['Generous time off', 'Five weeks paid, plus the company-wide winter shutdown.'],
                ['Real learning budget', 'Books, conferences, courses — funded, no approvals theater.'],
                ['Top-of-band pay', 'Transparent, location-fair, reviewed twice a year.'],
            ] as [$t, $d])
                <div class="rounded-2xl border border-hairline p-8">
                    <h3 class="text-lg font-semibold">{{ $t }}</h3>
                    <p class="mt-3 text-muted-foreground">{{ $d }}</p>
                </div>
            @endforeach
        </div>
    </x-section>

    <section class="border-t border-hairline bg-surface-muted">
        <div class="container-page py-24">
            <x-section-header eyebrow="Open roles" title="Come build with us." />
            <div class="mt-12 divide-y divide-hairline border-y border-hairline">
                @foreach ([
                    ['Senior Full-Stack Engineer', 'Remote · Full-time', 'TypeScript, Node, React, Postgres'],
                    ['Platform / DevOps Engineer', 'Remote · Full-time', 'AWS, Kubernetes, Terraform'],
                    ['AI Engineer', 'Remote · Full-time', 'Python, LLMs, RAG, evaluation'],
                    ['Product Designer', 'Remote · Full-time', 'Systems thinking, prototyping'],
                ] as [$role, $meta, $stack])
                    <a href="{{ route('contact') }}" class="grid grid-cols-1 md:grid-cols-[1.5fr_1fr_1fr_auto] gap-4 py-6 items-center hover:bg-background transition px-2">
                        <span class="text-xl font-semibold">{{ $role }}</span>
                        <span class="text-sm text-muted-foreground">{{ $meta }}</span>
                        <span class="text-sm text-muted-foreground">{{ $stack }}</span>
                        <span class="text-brand-azure">Apply →</span>
                    </a>
                @endforeach
            </div>
            <p class="mt-8 text-muted-foreground">
                Don't see your role? We're always interested in meeting exceptional engineers and designers — write to us anyway.
            </p>
        </div>
    </section>
@endsection
