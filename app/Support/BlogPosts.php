<?php

namespace App\Support;

class BlogPosts
{
    /**
     * @return list<array{
     *     slug: string,
     *     title: string,
     *     excerpt: string,
     *     category: string,
     *     date: string,
     *     read_time: string,
     *     author: string,
     *     image: string,
     *     image_alt: string,
     *     content: string,
     * }>
     */
    public static function all(): array
    {
        return collect(self::posts())
            ->sortByDesc('date')
            ->values()
            ->all();
    }

    /**
     * @return array{
     *     slug: string,
     *     title: string,
     *     excerpt: string,
     *     category: string,
     *     date: string,
     *     read_time: string,
     *     author: string,
     *     image: string,
     *     image_alt: string,
     *     content: string,
     * }|null
     */
    public static function find(string $slug): ?array
    {
        return collect(self::posts())->firstWhere('slug', $slug);
    }

    /**
     * @return list<array{
     *     slug: string,
     *     title: string,
     *     excerpt: string,
     *     category: string,
     *     date: string,
     *     read_time: string,
     *     author: string,
     *     image: string,
     *     image_alt: string,
     *     content: string,
     * }>
     */
    private static function posts(): array
    {
        return [
            [
                'slug' => 'why-senior-only-engineering-teams-ship-faster',
                'title' => 'Why senior-only engineering teams ship faster',
                'excerpt' => 'Junior-heavy teams look cheaper on paper. In practice, they slow delivery, multiply rework, and push architectural risk into production.',
                'category' => 'Engineering',
                'date' => '2026-05-12',
                'read_time' => '6 min read',
                'author' => 'Stackxis Engineering',
                'image' => 'images/blog/engineering.svg',
                'image_alt' => 'Abstract illustration representing software engineering architecture',
                'content' => <<<'HTML'
<p>Every growing product team eventually faces the same hiring pressure: scale the engineering org fast, fill seats, and keep velocity up. The default answer is to add junior and mid-level engineers under a thin layer of seniors. It looks efficient on a spreadsheet. It rarely works that way in production.</p>

<p>Senior engineers don't just write code faster—they make fewer reversible mistakes. They recognize when a "quick fix" is actually a six-month refactor waiting to happen. They know which abstractions earn their keep and which ones become tomorrow's incident postmortem.</p>

<h2>The hidden cost of coordination</h2>

<p>When a team is mostly junior, seniors spend their time reviewing, unblocking, and re-explaining context instead of building. Every feature becomes a teaching exercise. That's valuable in the right context, but it's expensive when you're racing toward a launch window or a funding milestone.</p>

<p>A senior-only studio inverts that ratio. The people in the room are the people writing the code, making the trade-offs, and owning the outcomes. Communication overhead drops. Decisions happen in hours, not sprint planning meetings.</p>

<h2>Architecture decisions compound</h2>

<p>The most expensive bugs aren't syntax errors—they're structural. Choosing the wrong data model, coupling services too early, or skipping observability because "we'll add it later" are decisions that junior teams make under deadline pressure, often without recognizing the long-term cost.</p>

<p>Senior engineers have seen these patterns before. They've migrated the monolith, debugged the distributed transaction, and cleaned up the schema that "worked fine at 10k users." That experience shows up as fewer rewrites, fewer outages, and software that still makes sense six months after launch.</p>

<h2>When junior-heavy teams make sense</h2>

<p>We're not arguing against hiring juniors everywhere. Large companies with mature platforms, strong mentorship programs, and dedicated platform teams can absorb the ramp-up cost. Early-stage products with hard deadlines and limited runway usually can't.</p>

<p>If you're a founder or CTO betting the company on a platform that has to work, the team building it should have already shipped things that worked under real load. That's the bar we hold ourselves to—and the one we think ambitious teams should demand from any engineering partner.</p>
HTML,
            ],
            [
                'slug' => 'erp-modernization-where-to-start',
                'title' => 'ERP modernization: where to start without boiling the ocean',
                'excerpt' => 'Legacy ERPs don\'t fail all at once. They erode quietly—until inventory, finance, and ops can\'t trust the same numbers.',
                'category' => 'ERP & Operations',
                'date' => '2026-04-28',
                'read_time' => '7 min read',
                'author' => 'Stackxis Engineering',
                'image' => 'images/blog/erp.svg',
                'image_alt' => 'Illustration of ERP dashboards and operational data flows',
                'content' => <<<'HTML'
<p>Most operators we talk to don't want a new ERP. They want their current one to stop lying to them. Reports don't reconcile. Inventory counts drift. A spreadsheet somewhere still holds the "real" numbers. The system of record stopped being trustworthy years ago—but replacing it feels like open-heart surgery while running a marathon.</p>

<p>The good news: you don't have to rip everything out on day one. The teams that modernize successfully treat ERP migration as a sequence of bounded bets, not a single big-bang cutover.</p>

<h2>Start with the pain that costs money today</h2>

<p>Map where bad data or manual work is actively hurting the business. Is it stockouts because inventory is wrong? Margin leakage because pricing rules live in three places? Month-end close taking two weeks because finance reconciles by hand?</p>

<p>Pick one workflow where fixing the source of truth has a measurable ROI within a quarter. That becomes your first migration slice—not "replace the entire ERP," but "make inventory trustworthy across these four warehouses."</p>

<h2>Strangle, don't rewrite</h2>

<p>The strangler fig pattern works well for ERP modernization. Keep the legacy system running for stable, low-change modules while new services own the workflows that need to move fast. Sync data through well-defined boundaries. Document what each system owns.</p>

<p>This approach limits blast radius. If the new inventory service has issues, finance and HR keep running. You learn how your org actually operates before committing to a full platform swap.</p>

<h2>Invest in data contracts early</h2>

<p>Modernization fails when teams underestimate integration. Before writing application code, agree on entity definitions: what is a SKU, an order line, a cost center? Who is authoritative for each field? How do conflicts resolve?</p>

<p>These contracts are boring work. They're also what separates a migration that finishes from one that stalls in endless reconciliation meetings.</p>

<h2>Choose partners who've done the unglamorous part</h2>

<p>Flashy UIs are easy to demo. Correct ledger postings, multi-warehouse transfers, and tax rules across regions are not. When evaluating build partners, ask about production ERP modules they've shipped—not prototypes, not "similar" e-commerce builds.</p>

<p>The goal isn't a modern interface on top of broken logic. It's a system your operators trust on the Tuesday after go-live, when the novelty has worn off and the real work continues.</p>
HTML,
            ],
            [
                'slug' => 'building-rag-systems-that-dont-hallucinate-in-production',
                'title' => 'Building RAG systems that don\'t hallucinate in production',
                'excerpt' => 'Retrieval-augmented generation is easy to demo and hard to trust. Here\'s how we approach evaluation, grounding, and observability.',
                'category' => 'AI',
                'date' => '2026-03-15',
                'read_time' => '8 min read',
                'author' => 'Stackxis Engineering',
                'image' => 'images/blog/ai.svg',
                'image_alt' => 'Illustration of a retrieval-augmented generation pipeline',
                'content' => <<<'HTML'
<p>Every B2B team we talk to has shipped a RAG prototype. Fewer have shipped one they'd let a customer-facing support agent rely on without supervision. The gap isn't model quality—it's everything around the model.</p>

<p>Production RAG isn't a chatbot with a vector database bolted on. It's a retrieval pipeline, a grounding policy, an evaluation harness, and an observability stack that tells you when confidence is low before a user sees a wrong answer.</p>

<figure>
    <img src="/images/blog/ai.svg" alt="Diagram of retrieval nodes feeding a central RAG pipeline">
    <figcaption>Retrieval quality is the foundation — generation only works when the right context is found first.</figcaption>
</figure>

<h2>Retrieval quality beats prompt engineering</h2>

<p>Most hallucination problems start upstream. If retrieval returns irrelevant chunks, even the best model will confabulate a plausible-sounding answer. Invest in chunking strategy, metadata filters, hybrid search, and reranking before you tune system prompts.</p>

<p>For domain-specific knowledge bases—policy docs, API references, internal runbooks—we almost always combine dense retrieval with keyword search and a cross-encoder reranker. The extra latency is worth it when wrong answers have a support ticket attached.</p>

<h2>Ground answers in citations</h2>

<p>If the system can't cite a source, it shouldn't state the answer as fact. We enforce citation requirements in the output schema and reject responses that don't map claims back to retrieved passages. Users see where information came from; reviewers can audit failures quickly.</p>

<p>For high-stakes workflows—compliance, billing, medical adjacent content—we add a refusal path: when retrieval confidence is below threshold, the system escalates to a human instead of guessing.</p>

<h2>Evaluate like you mean it</h2>

<p>Demo metrics lie. "Looks good in the playground" isn't a test plan. Build a golden set of real questions your users ask, with expected answers and acceptable source references. Run it on every embedding model change, chunk size tweak, and prompt revision.</p>

<p>Track precision and recall at the retrieval layer separately from generation quality. A model can summarize well and still be wrong if retrieval missed the right document.</p>

<h2>Observe in production</h2>

<p>Log retrieval results, latency, token usage, and user feedback signals. Sample conversations for human review. Set alerts on rising escalation rates or dropping thumbs-up scores. AI systems drift as your knowledge base changes—treat maintenance as ongoing engineering work, not a one-time integration project.</p>

<p>The teams that win with applied AI aren't the ones with the flashiest demos. They're the ones who built the boring infrastructure that makes answers traceable, failures visible, and improvements measurable week over week.</p>
HTML,
            ],
            [
                'slug' => 'async-first-remote-teams-that-actually-deliver',
                'title' => 'Async-first remote teams that actually deliver',
                'excerpt' => 'Remote doesn\'t fail because of time zones. It fails when teams copy the meeting cadence of an office and call it collaboration.',
                'category' => 'Culture',
                'date' => '2026-02-03',
                'read_time' => '5 min read',
                'author' => 'Stackxis Engineering',
                'image' => 'images/blog/culture.svg',
                'image_alt' => 'Illustration representing distributed remote collaboration',
                'content' => <<<'HTML'
<p>Stackxis has been remote-first since day one. We've seen what works and what turns distributed teams into slower versions of co-located ones. The difference usually isn't tooling—it's whether async communication is the default or an afterthought.</p>

<h2>Write decisions down</h2>

<p>If it wasn't documented, it didn't happen. Architecture decisions, scope changes, and API contracts live in durable artifacts—not slide decks, not meeting notes that nobody reads. This isn't bureaucracy; it's how you onboard new engineers, hand off work across time zones, and avoid re-litigating the same conversation every sprint.</p>

<h2>Meetings are for unblocking, not status</h2>

<p>Status updates belong in written form. Meetings are for ambiguity that can't be resolved asynchronously: conflicting requirements, sensitive feedback, complex whiteboard problems. When calendars are full of standups and syncs, deep work disappears—and deep work is what ships software.</p>

<h2>Overlap is a feature, not the whole product</h2>

<p>We aim for a few hours of daily overlap across regions for real-time collaboration when needed. The rest of the day is protected for focused implementation. Teams that expect instant responses across twelve time zones burn out and ship shallow work.</p>

<h2>Hire people who communicate in prose</h2>

<p>Remote senior engineers need to explain trade-offs clearly in writing. Code review comments, design docs, and incident reports are how trust scales. The best remote contributors aren't just strong technically—they make their thinking legible to people who weren't in the room.</p>

<p>Done well, remote-first delivery isn't a compromise. It's a forcing function for clarity, documentation, and respect for focus—things every engineering org should want, regardless of where people sit.</p>
HTML,
            ],
        ];
    }
}
