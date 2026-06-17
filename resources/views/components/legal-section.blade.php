@props(['title'])

<div>
    <h2 class="text-xl font-semibold">{{ $title }}</h2>
    <div class="mt-4 space-y-4 text-muted-foreground leading-relaxed">
        {{ $slot }}
    </div>
</div>
