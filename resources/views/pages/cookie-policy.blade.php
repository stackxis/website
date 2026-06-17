@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="Legal"
        title='Cookie <span class="text-gradient-brand">Policy</span>'
        description="How Stackxis uses cookies and similar technologies on our website."
    />

    <x-section>
        <div class="max-w-3xl">
            <p class="text-sm text-muted-foreground">Last updated: June 18, 2025</p>

            <div class="mt-12 space-y-10">
                <x-legal-section title="1. What are cookies?">
                    <p>
                        Cookies are small text files stored on your device when you visit a website. They help sites remember your preferences, keep sessions secure, and understand how visitors interact with content.
                    </p>
                </x-legal-section>

                <x-legal-section title="2. How we use cookies">
                    <p>Stackxis uses cookies and similar technologies for the following purposes:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li><strong class="text-foreground">Essential cookies</strong> — required for core site functionality, such as maintaining secure sessions when you submit forms or navigate the site.</li>
                        <li><strong class="text-foreground">Analytics cookies</strong> — help us understand how visitors use our website (e.g. pages viewed, time on site) so we can improve content and performance.</li>
                        <li><strong class="text-foreground">Preference cookies</strong> — remember choices you make to provide a more consistent experience on return visits.</li>
                    </ul>
                </x-legal-section>

                <x-legal-section title="3. Cookies we may use">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border border-hairline rounded-xl overflow-hidden">
                            <thead class="bg-surface-muted">
                                <tr>
                                    <th class="text-left p-4 font-semibold text-foreground">Cookie</th>
                                    <th class="text-left p-4 font-semibold text-foreground">Purpose</th>
                                    <th class="text-left p-4 font-semibold text-foreground">Duration</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-hairline">
                                <tr>
                                    <td class="p-4">Session cookie</td>
                                    <td class="p-4">Maintains your session and form security (CSRF protection)</td>
                                    <td class="p-4">Session</td>
                                </tr>
                                <tr>
                                    <td class="p-4">Analytics</td>
                                    <td class="p-4">Aggregated usage statistics to improve the site</td>
                                    <td class="p-4">Up to 2 years</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-4">
                        The specific cookies in use may change as we update our site or tooling. This table reflects our current practices.
                    </p>
                </x-legal-section>

                <x-legal-section title="4. Third-party cookies">
                    <p>
                        Some cookies may be set by third-party services we use, such as analytics providers or embedded content. These parties have their own privacy and cookie policies. We encourage you to review them.
                    </p>
                </x-legal-section>

                <x-legal-section title="5. Managing cookies">
                    <p>You can control cookies through your browser settings. Most browsers allow you to:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>View and delete cookies stored on your device.</li>
                        <li>Block all cookies or only third-party cookies.</li>
                        <li>Receive a notification before a cookie is stored.</li>
                    </ul>
                    <p>
                        Disabling essential cookies may affect site functionality, including form submissions. For guidance on managing cookies in your browser, visit your browser&apos;s help documentation.
                    </p>
                </x-legal-section>

                <x-legal-section title="6. Related policies">
                    <p>
                        For more information on how we handle personal data, see our
                        <a href="{{ route('privacy-policy') }}" class="text-primary hover:underline">Privacy Policy</a>.
                        General website terms are covered in our
                        <a href="{{ route('terms-and-conditions') }}" class="text-primary hover:underline">Terms &amp; Conditions</a>.
                    </p>
                </x-legal-section>

                <x-legal-section title="7. Contact us">
                    <p>
                        If you have questions about our use of cookies, email
                        <a href="mailto:hello@stackxis.com" class="text-primary hover:underline">hello@stackxis.com</a>.
                    </p>
                </x-legal-section>
            </div>
        </div>
    </x-section>
@endsection
