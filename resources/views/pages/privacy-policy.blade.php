@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="Legal"
        title='Privacy <span class="text-gradient-brand">Policy</span>'
        description="How Stackxis collects, uses, and protects your personal information when you visit our website or work with us."
    />

    <x-section>
        <div class="max-w-3xl">
            <p class="text-sm text-muted-foreground">Last updated: June 18, 2025</p>

            <div class="mt-12 space-y-10">
                <x-legal-section title="1. Who we are">
                    <p>
                        Stackxis (&quot;we&quot;, &quot;us&quot;, or &quot;our&quot;) is a software engineering studio. This Privacy Policy explains how we handle personal data when you use our website at stackxis.com or engage our services.
                    </p>
                    <p>
                        For privacy-related enquiries, contact us at
                        <a href="mailto:hello@stackxis.com" class="text-primary hover:underline">hello@stackxis.com</a>.
                    </p>
                </x-legal-section>

                <x-legal-section title="2. Information we collect">
                    <p>We may collect the following types of information:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li><strong class="text-foreground">Contact details</strong>- name, email address, phone number, and company name when you submit our contact form or reach out directly.</li>
                        <li><strong class="text-foreground">Project information</strong>- details you share about your business, technical requirements, and project scope during consultations or engagements.</li>
                        <li><strong class="text-foreground">Usage data</strong>- pages visited, referring URLs, browser type, device information, and approximate location derived from IP address.</li>
                        <li><strong class="text-foreground">Communications</strong>- records of email, call, or message correspondence related to enquiries and client work.</li>
                    </ul>
                </x-legal-section>

                <x-legal-section title="3. How we use your information">
                    <p>We use personal data to:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Respond to enquiries and schedule consultations.</li>
                        <li>Deliver, manage, and improve our engineering services.</li>
                        <li>Send relevant updates about projects you are engaged in.</li>
                        <li>Analyse website usage to improve our content and user experience.</li>
                        <li>Comply with legal obligations and protect our legitimate business interests.</li>
                    </ul>
                    <p>We do not sell your personal information to third parties.</p>
                </x-legal-section>

                <x-legal-section title="4. Legal basis for processing">
                    <p>Depending on your location and the context, we process personal data based on:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Your consent (e.g. when you submit a contact form).</li>
                        <li>Performance of a contract or steps prior to entering one.</li>
                        <li>Our legitimate interests in operating and improving our business.</li>
                        <li>Compliance with applicable legal requirements.</li>
                    </ul>
                </x-legal-section>

                <x-legal-section title="5. Sharing your information">
                    <p>We may share data with:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Service providers who assist with hosting, email delivery, analytics, or project management tools bound by confidentiality obligations.</li>
                        <li>Professional advisers such as lawyers or accountants when required.</li>
                        <li>Authorities when required by law or to protect our rights.</li>
                    </ul>
                    <p>We require third parties to handle data securely and only for specified purposes.</p>
                </x-legal-section>

                <x-legal-section title="6. Data retention">
                    <p>
                        We retain personal data only as long as necessary for the purposes described in this policy, including to satisfy legal, accounting, or reporting requirements. Enquiry data is typically retained for up to two years unless a client relationship is established.
                    </p>
                </x-legal-section>

                <x-legal-section title="7. Your rights">
                    <p>Depending on applicable law, you may have the right to:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Access, correct, or delete your personal data.</li>
                        <li>Object to or restrict certain processing activities.</li>
                        <li>Withdraw consent where processing is consent-based.</li>
                        <li>Request data portability.</li>
                        <li>Lodge a complaint with a supervisory authority.</li>
                    </ul>
                    <p>
                        To exercise these rights, email
                        <a href="mailto:hello@stackxis.com" class="text-primary hover:underline">hello@stackxis.com</a>.
                        We will respond within a reasonable timeframe.
                    </p>
                </x-legal-section>

                <x-legal-section title="8. Security">
                    <p>
                        We implement appropriate technical and organisational measures to protect personal data against unauthorised access, alteration, disclosure, or destruction. No method of transmission over the internet is completely secure, and we cannot guarantee absolute security.
                    </p>
                </x-legal-section>

                <x-legal-section title="9. International transfers">
                    <p>
                        As a remote first studio, your data may be processed in countries other than your own. Where required, we ensure appropriate safeguards are in place for cross-border data transfers.
                    </p>
                </x-legal-section>

                <x-legal-section title="10. Changes to this policy">
                    <p>
                        We may update this Privacy Policy from time to time. The &quot;Last updated&quot; date at the top of this page will reflect any revisions. Continued use of our website after changes constitutes acceptance of the updated policy.
                    </p>
                </x-legal-section>
            </div>
        </div>
    </x-section>
@endsection
