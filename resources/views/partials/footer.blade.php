<footer class="border-t border-hairline bg-surface-muted mt-24">
    <div class="container-page py-16 grid gap-12 md:grid-cols-[1.5fr_1fr_1fr_1fr]">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Stackxis" class="h-10 w-auto">
            <p class="mt-4 text-sm text-muted-foreground max-w-xs">
                Engineering studio building reliable software for ambitious teams.
            </p>
        </div>
        <div>
            <h4 class="text-xs uppercase tracking-widest text-muted-foreground">Company</h4>
            <ul class="mt-4 space-y-2 text-sm">
                <li><a href="{{ route('about') }}" class="hover:text-primary">About</a></li>
                <li><a href="{{ route('careers') }}" class="hover:text-primary">Careers</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-primary">Contact</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-xs uppercase tracking-widest text-muted-foreground">Work</h4>
            <ul class="mt-4 space-y-2 text-sm">
                <li><a href="{{ route('services') }}" class="hover:text-primary">Services</a></li>
                <li><a href="{{ route('solutions') }}" class="hover:text-primary">Solutions</a></li>
                <li><a href="{{ route('portfolio') }}" class="hover:text-primary">Case studies</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-xs uppercase tracking-widest text-muted-foreground">Contact</h4>
            <ul class="mt-4 space-y-2 text-sm text-muted-foreground">
                <li>hello@stackxis.com</li>
                <li>Remote-first · Worldwide</li>
            </ul>
        </div>
    </div>
    <div class="border-t border-hairline">
        <div class="container-page py-6 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-muted-foreground">
            <p>&copy; {{ date('Y') }} Stackxis. All rights reserved.</p>
            <p>Crafted with intent.</p>
        </div>
    </div>
</footer>
