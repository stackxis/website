<?php

namespace App\Http\Controllers;

use App\Support\BlogPosts;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'title' => 'Stackxis — Engineering studio for ambitious software teams',
            'description' => 'We design, build, and scale dependable software. From product strategy to production-grade platforms — built by a senior team.',
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'title' => 'About Stackxis — Remote-First Software Development Company',
            'description' => 'A senior software engineering studio built by developers, for ambitious teams. Remote-first custom software, cloud ERPs, and enterprise platforms — engineered for reliability.',
            'founders' => [
                [
                    'name' => 'Founder Name',
                    'role' => 'Co-Founder / Engineering Lead',
                    'bio' => 'Senior full-stack engineer with a decade of experience architecting production systems across fintech and SaaS.',
                    'linkedin' => '#',
                    'initials' => 'FN',
                ],
                [
                    'name' => 'Founder Name',
                    'role' => 'Co-Founder / Systems Architect',
                    'bio' => 'Specializes in cloud-native infrastructure, distributed systems, and legacy platform modernization at enterprise scale.',
                    'linkedin' => '#',
                    'initials' => 'FN',
                ],
                [
                    'name' => 'Founder Name',
                    'role' => 'Co-Founder / Product Lead',
                    'bio' => 'Bridges technical architecture and product strategy — shipping MVPs to multi-tenant platforms for funded startups and operators.',
                    'linkedin' => '#',
                    'initials' => 'FN',
                ],
            ],
        ]);
    }

    public function capabilities(): View
    {
        return view('pages.services', [
            'title' => 'End-to-End Software Development Services for B2B — Stackxis',
            'description' => 'Custom software engineering, ERP & POS development, cloud infrastructure, applied AI, and B2B digital marketing — delivered by senior-only engineers.',
        ]);
    }

    public function expertise(): View
    {
        return view('pages.solutions', [
            'title' => 'Expertise — Stackxis',
            'description' => 'Industries we know deeply and the technologies we reach for — from fintech to healthcare, React to Kubernetes.',
        ]);
    }

    public function work(): View
    {
        return view('pages.portfolio', [
            'title' => 'Selected Work — Stackxis',
            'description' => 'A selection of builds and platforms Stackxis has designed, engineered, and scaled with clients across industries.',
        ]);
    }

    public function join(): View
    {
        return view('pages.careers', [
            'title' => 'Careers at Stackxis — Remote Senior Software Engineering Jobs',
            'description' => 'Remote senior software engineering jobs and full-stack developer roles at Stackxis. Join a custom software development studio building ERPs, SaaS platforms, and cloud infrastructure.',
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'title' => 'Contact Stackxis — Hire Custom Software Developers',
            'description' => 'Contact our software engineering studio for a B2B project consultation. Senior architects review every inquiry within 24 hours — no sales decks, no account managers.',
        ]);
    }

    public function blog(): View
    {
        return view('pages.blog', [
            'title' => 'Blog — Stackxis',
            'description' => 'Engineering notes on software architecture, ERP modernization, applied AI, and remote-first delivery from the Stackxis team.',
            'posts' => BlogPosts::all(),
        ]);
    }

    public function blogPost(string $slug): View
    {
        $post = BlogPosts::find($slug);

        abort_unless($post, 404);

        $morePosts = collect(BlogPosts::all())
            ->where('slug', '!=', $slug)
            ->take(3)
            ->values()
            ->all();

        return view('pages.blog-post', [
            'title' => $post['title'].' — Stackxis Blog',
            'description' => $post['excerpt'],
            'post' => $post,
            'morePosts' => $morePosts,
        ]);
    }

    public function privacyPolicy(): View
    {
        return view('pages.privacy-policy', [
            'title' => 'Privacy Policy — Stackxis',
            'description' => 'How Stackxis collects, uses, and protects your personal information.',
        ]);
    }

    public function termsAndConditions(): View
    {
        return view('pages.terms-and-conditions', [
            'title' => 'Terms & Conditions — Stackxis',
            'description' => 'Terms governing your use of the Stackxis website and engineering services.',
        ]);
    }

    public function cookiePolicy(): View
    {
        return view('pages.cookie-policy', [
            'title' => 'Cookie Policy — Stackxis',
            'description' => 'How Stackxis uses cookies and similar technologies on our website.',
        ]);
    }

    public function sitemap(): Response
    {
        $pages = [
            ['route' => 'home', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['route' => 'capabilities', 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['route' => 'expertise', 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['route' => 'about', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['route' => 'join', 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['route' => 'work', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['route' => 'contact', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['route' => 'blog', 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['route' => 'privacy-policy', 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['route' => 'terms-and-conditions', 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['route' => 'cookie-policy', 'priority' => '0.3', 'changefreq' => 'yearly'],
        ];

        $lastmod = now()->toDateString();

        $urls = collect($pages)->map(function (array $page) use ($lastmod) {
            $loc = e(route($page['route']));

            return implode("\n", [
                '  <url>',
                "    <loc>{$loc}</loc>",
                "    <lastmod>{$lastmod}</lastmod>",
                "    <changefreq>{$page['changefreq']}</changefreq>",
                "    <priority>{$page['priority']}</priority>",
                '  </url>',
            ]);
        });

        $blogUrls = collect(BlogPosts::all())->map(function (array $post) {
            $loc = e(route('blog.show', $post['slug']));

            return implode("\n", [
                '  <url>',
                "    <loc>{$loc}</loc>",
                "    <lastmod>{$post['date']}</lastmod>",
                '    <changefreq>monthly</changefreq>',
                '    <priority>0.6</priority>',
                '  </url>',
            ]);
        });

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n"
            .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n"
            .$urls->merge($blogUrls)->join("\n")."\n"
            .'</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }
}
