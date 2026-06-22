@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="Legal"
        title='Terms &amp; <span class="text-gradient-brand">Conditions</span>'
        description="The terms governing your use of the Stackxis website and our engineering services."
    />

    <x-section>
        <div class="max-w-3xl">
            <p class="text-sm text-muted-foreground">Last updated: June 18, 2025</p>

            <div class="mt-12 space-y-10">
                <x-legal-section title="1. Agreement to terms">
                    <p>
                        By accessing stackxis.com or engaging Stackxis for services, you agree to these Terms &amp; Conditions. If you do not agree, please do not use our website or services.
                    </p>
                    <p>
                        For questions, contact
                        <a href="mailto:hello@stackxis.com" class="text-primary hover:underline">hello@stackxis.com</a>.
                    </p>
                </x-legal-section>

                <x-legal-section title="2. About Stackxis">
                    <p>
                        Stackxis is a software engineering studio providing custom software development, cloud solutions, ERP &amp; POS systems, and related technical consulting services to businesses worldwide.
                    </p>
                </x-legal-section>

                <x-legal-section title="3. Website use">
                    <p>You agree to use our website only for lawful purposes. You must not:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Attempt to gain unauthorised access to our systems or data.</li>
                        <li>Introduce malware, automated scraping tools, or other harmful code.</li>
                        <li>Reproduce, distribute, or commercially exploit site content without written permission.</li>
                        <li>Misrepresent your identity or affiliation when contacting us.</li>
                    </ul>
                </x-legal-section>

                <x-legal-section title="4. Services and engagements">
                    <p>
                        Specific project scope, deliverables, timelines, fees, and intellectual property arrangements are defined in a separate statement of work, proposal, or service agreement signed by both parties. These Terms apply generally; where a signed agreement conflicts, the signed agreement prevails.
                    </p>
                </x-legal-section>

                <x-legal-section title="5. Intellectual property">
                    <p>
                        All content on this website including text, graphics, logos, and design is owned by Stackxis or its licensors and protected by applicable intellectual property laws. You may not use our branding or materials without prior written consent.
                    </p>
                    <p>
                        Ownership of work product created under a client engagement is governed by the applicable project agreement.
                    </p>
                </x-legal-section>

                <x-legal-section title="6. Confidentiality">
                    <p>
                        We treat client information shared during enquiries and engagements as confidential, subject to the terms of any executed non-disclosure or service agreement. You agree not to disclose proprietary Stackxis methodologies or internal materials without permission.
                    </p>
                </x-legal-section>

                <x-legal-section title="7. Disclaimers">
                    <p>
                        Our website and its content are provided &quot;as is&quot; for general information purposes. We make no warranties, express or implied, regarding the accuracy, completeness, or suitability of website content. Nothing on this site constitutes professional advice or a binding offer of services.
                    </p>
                </x-legal-section>

                <x-legal-section title="8. Limitation of liability">
                    <p>
                        To the fullest extent permitted by law, Stackxis shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from your use of this website. Our total liability for claims related to website use shall not exceed the amount you paid us, if any, in the twelve months preceding the claim.
                    </p>
                    <p>
                        Liability for paid services is governed by the applicable service agreement.
                    </p>
                </x-legal-section>

                <x-legal-section title="9. Third-party links">
                    <p>
                        Our website may contain links to third-party sites. We are not responsible for the content, privacy practices, or availability of those external sites.
                    </p>
                </x-legal-section>

                <x-legal-section title="10. Governing law">
                    <p>
                        These Terms are governed by the laws of Sri Lanka, without regard to conflict-of-law principles. Any disputes arising from website use shall be subject to the exclusive jurisdiction of the courts of Sri Lanka, unless otherwise agreed in a signed service agreement.
                    </p>
                </x-legal-section>

                <x-legal-section title="11. Changes">
                    <p>
                        We may revise these Terms at any time. Updated terms will be posted on this page with a revised &quot;Last updated&quot; date. Your continued use of the website constitutes acceptance of the changes.
                    </p>
                </x-legal-section>
            </div>
        </div>
    </x-section>
@endsection
