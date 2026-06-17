@props([
    'eyebrow',
    'title',
    'description',
    'ctaText' => null,
    'ctaHref' => null,
])

<section class="relative border-b border-hairline">
    <div class="absolute inset-0 hairline-grid opacity-[0.35] pointer-events-none"></div>
    <div class="container-page relative pt-28 pb-20 md:pt-36 md:pb-28">
        <p class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">{{ $eyebrow }}</p>
        <h1 class="mt-5 text-4xl md:text-6xl font-bold leading-[1.05] max-w-4xl">{!! $title !!}</h1>
        <p class="mt-6 text-lg text-muted-foreground max-w-2xl">{{ $description }}</p>
        @if ($ctaText && $ctaHref)
            <a href="{{ $ctaHref }}"
                class="mt-10 inline-flex items-center gap-2 rounded-full bg-primary px-7 py-3.5 text-sm font-medium text-primary-foreground hover:opacity-90 transition">
                {{ $ctaText }} <span aria-hidden="true">→</span>
            </a>
        @endif
    </div>
</section>
