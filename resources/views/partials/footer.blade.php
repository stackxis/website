<footer class="border-t border-hairline bg-surface-muted mt-24">
    <div class="container-page py-16 grid gap-12 md:grid-cols-[1.5fr_1fr_1fr_1fr]">

        <!-- Logo & Description -->
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Stackxis" class="h-10 w-auto">
            <p class="mt-4 text-sm text-muted-foreground max-w-xs">
                Engineering studio building reliable software for ambitious teams.
            </p>
            <p class="mt-4 text-sm text-muted-foreground">
                <i class="fas fa-envelope mr-2"></i>
                hello@stackxis.com
            </p>

            <p class="mt-2 text-sm text-muted-foreground">
                <i class="fas fa-phone mr-2"></i>
                +94 740 190 589
            </p>
            <div class="flex items-center gap-5 mt-6">

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
                    <i class="fab fa-x-twitter"></i>
                </a>

            </div>
        </div>

        <!-- About -->
        <div>
            <h4 class="text-xs uppercase tracking-widest text-muted-foreground">Company</h4>
            <ul class="mt-4 space-y-2 text-sm">
                <li>
                    <a href="{{ route('about') }}" class="hover:text-primary">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ route('capabilities') }}" class="hover:text-primary">
                        Capabilities
                    </a>
                </li>
                <li>

                    <a href="{{ route('join') }}" class="hover:text-primary">
                        Careers
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="hover:text-primary">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="hover:text-primary">
                        Contact
                    </a>
                </li>
            </ul>
        </div>

        <!-- Services -->
        <div>
            <h4 class="text-xs uppercase tracking-widest text-muted-foreground">Services</h4>
            <ul class="mt-4 space-y-2 text-sm">
                <li>
                    <a href="{{ route('capabilities') }}" class="hover:text-primary">
                        Web development
                    </a>
                </li>
                <li>
                    <a href="{{ route('capabilities') }}" class="hover:text-primary">
                        Digital marketing
                    </a>
                </li>
                 <li>
                    <a href="{{ route('capabilities') }}" class="hover:text-primary">
                        Software solution
                    </a>
                </li>
                 <li>
                    <a href="{{ route('capabilities') }}" class="hover:text-primary">
                        Cloud solution
                    </a>
                </li>
                 <li>
                    <a href="{{ route('capabilities') }}" class="hover:text-primary">
                        ERP & POS systems
                    </a>
                </li>
                 <li>
                    <a href="{{ route('capabilities') }}" class="hover:text-primary">
                        IT Consulting
                    </a>
                </li>
            </ul>
        </div>

        <!-- Contact & Social -->
        <div>
            <h4 class="text-xs uppercase tracking-widest text-muted-foreground">Legal</h4>

            <ul class="mt-4 space-y-2 text-sm">
                <li>
                    <a href="{{ route('cookie-policy') }}" class="hover:text-primary">
                        Cookie policy
                    </a>
                </li>
                <li>
                    <a href="{{ route('privacy-policy') }}" class="hover:text-primary">
                        Privacy Policy
                    </a>
                </li>
                <li>
                    <a href="{{ route('terms-and-conditions') }}" class="hover:text-primary">
                        Terms & Conditions
                    </a>
                </li>
            </ul>

        </div>

    </div>

    <div class="border-t border-hairline">
        <div
            class="container-page py-6 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-muted-foreground">
            <p>&copy; {{ date('Y') }} Stackxis. All rights reserved.</p>
            <p>Business software and engineering.</p>
        </div>
    </div>
</footer>
