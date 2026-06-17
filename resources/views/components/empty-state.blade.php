@props([
    'title' => 'Nothing here yet',
    'message' => 'There are no items currently available. Please check back soon.',
    'icon' => 'fa-inbox',
])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center justify-center rounded-2xl border border-dashed border-hairline bg-surface-muted px-8 py-16 text-center md:py-20']) }}>
    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-sky/20 text-brand-azure">
        <i class="fas {{ $icon }} text-xl" aria-hidden="true"></i>
    </div>
    <h3 class="mt-6 text-xl font-semibold">{{ $title }}</h3>
    <p class="mt-3 max-w-md text-muted-foreground leading-relaxed">{{ $message }}</p>
    @if ($slot->isNotEmpty())
        <div class="mt-6">
            {{ $slot }}
        </div>
    @endif
</div>
