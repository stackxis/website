@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="Contact"
        title='Let&apos;s talk about what you&apos;re <span class="text-gradient-brand">actually</span> building.'
        description="Tell us a little about your project. A senior engineer — not a sales rep — will reply within one business day."
    />

    <section class="container-page py-20 grid lg:grid-cols-[1fr_1.4fr] gap-16">
        <div class="space-y-10">
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Email</h3>
                <p class="mt-3 text-xl font-medium">hello@stackxis.com</p>
            </div>
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Call</h3>
                <p class="mt-3 text-xl font-medium"><a href="tel:+94740190519">+94 74 019 0519</a></p>
            </div>
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Where we work</h3>
                <p class="mt-3 text-muted-foreground">
                    Remote-first studio with team members across Europe, the Americas, and South Asia. We coordinate primarily in your timezone for active engagements.
                </p>
            </div>
            <div>
                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">Response time</h3>
                <p class="mt-3 text-muted-foreground">Within one business day, always from a human.</p>
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
                    <h3 class="mt-6 text-2xl font-bold">Message received.</h3>
                    <p class="mt-3 text-muted-foreground">We'll get back to you within one business day.</p>
                </div>
            @else
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2">Your name</label>
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
                        <label for="email" class="block text-sm font-medium mb-2">Work email</label>
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
                        <label for="company" class="block text-sm font-medium mb-2">Company</label>
                        <input
                            id="company"
                            name="company"
                            type="text"
                            maxlength="200"
                            value="{{ old('company') }}"
                            class="w-full rounded-xl border border-hairline bg-background px-4 py-3 text-base focus:border-foreground focus:outline-none transition"
                        >
                    </div>
                    <div>
                        <label for="role" class="block text-sm font-medium mb-2">Role</label>
                        <input
                            id="role"
                            name="role"
                            type="text"
                            maxlength="200"
                            value="{{ old('role') }}"
                            class="w-full rounded-xl border border-hairline bg-background px-4 py-3 text-base focus:border-foreground focus:outline-none transition"
                        >
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium mb-2">What are you building?</label>
                    <textarea
                        id="message"
                        name="message"
                        required
                        rows="5"
                        maxlength="1500"
                        class="w-full rounded-xl border border-hairline bg-background px-4 py-3 text-base focus:border-foreground focus:outline-none transition @error('message') border-destructive @enderror"
                        placeholder="A few sentences on the problem, audience, and timeline."
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-sm text-destructive">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-primary px-7 py-4 text-sm font-medium text-primary-foreground hover:opacity-90 transition"
                >
                    Send message <span aria-hidden="true">→</span>
                </button>

                <p class="text-xs text-muted-foreground">
                    By submitting, you agree we may store your details to respond. We don't share or sell data.
                </p>
            @endif
        </form>
    </section>
@endsection
