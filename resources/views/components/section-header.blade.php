<div class="max-w-3xl">
    @isset($eyebrow)
        <p class="text-xs uppercase tracking-[0.2em] text-brand-azure font-medium">{{ $eyebrow }}</p>
    @endisset
    <h2 class="mt-4 text-3xl md:text-5xl font-bold leading-[1.05]">{{ $title }}</h2>
    @isset($description)
        <p class="mt-5 text-lg text-muted-foreground">{{ $description }}</p>
    @endisset
</div>
