<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\JobPosting;
use App\Models\PortfolioItem;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'title' => 'Custom Software Development Company | Stackxis',
            'description' => 'Stackxis is a senior-only software development studio building reliable, custom software solutions, web applications, and enterprise platforms for ambitious teams.',
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'title' => 'Reliable Software Development Agency | About Stackxis',
            'description' => 'Learn about Stackxis, a senior-only software consulting firm and reliable software development agency driving digital transformation for ambitious businesses.',
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
            'title' => 'Custom Software Solutions & SaaS Product Engineering | Stackxis',
            'description' => 'End-to-end software solutions managed entirely by senior engineers. From scalable multi-tenant SaaS platforms to custom API backend architecture.',
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
        $featured = PortfolioItem::query()->published()->featured()->ordered()->first();
        $deployments = PortfolioItem::query()->published()->cards()->ordered()->get();

        return view('pages.portfolio', [
            'title' => 'Our Work: Custom Software & Web Design Portfolio | Stackxis',
            'description' => 'Explore our portfolio of custom software, scalable SaaS platforms, and high-converting web designs engineered by the senior development team at Stackxis.',
            'featured' => $featured,
            'deployments' => $deployments,
        ]);
    }

    public function careers(): View
    {
        $jobs = JobPosting::query()->published()->ordered()->get();
        $schemaJob = $jobs->first();

        return view('pages.careers', [
            'title' => 'Careers at Stackxis | Remote Senior Software Engineering Jobs',
            'description' => 'Join a remote-first, senior-only software engineering studio. We are hiring experienced developers and engineers to build reliable, outcome-driven software.',
            'jobs' => $jobs,
            'schemaJob' => $schemaJob,
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'title' => 'Contact Us | Custom Software & Web Development | Stackxis',
            'description' => 'Ready to scale your business? Contact Stackxis today to discuss your custom software development, digital marketing, or web design project with our team.',
        ]);
    }

    public function blog(): View
    {
        $posts = BlogPost::query()
            ->published()
            ->ordered()
            ->get()
            ->map(fn (BlogPost $post) => $post->toPublicArray())
            ->all();

        return view('pages.blog', [
            'title' => 'Software Engineering & Digital Marketing Blog | Stackxis',
            'description' => 'Read the latest insights on custom software development, ERP systems, B2B SaaS architecture, and digital marketing strategies from the Stackxis team.',
            'posts' => $posts,
        ]);
    }

    public function blogPost(string $slug): View
    {
        $blogPost = BlogPost::query()->published()->where('slug', $slug)->first();

        abort_unless($blogPost, 404);

        $post = $blogPost->toPublicArray();

        $morePosts = BlogPost::query()
            ->published()
            ->ordered()
            ->where('slug', '!=', $slug)
            ->take(3)
            ->get()
            ->map(fn (BlogPost $related) => $related->toPublicArray())
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
            'title' => 'Privacy Policy | Stackxis Data & Data Protection',
            'description' => 'Read the Stackxis Privacy Policy to understand how we collect, use, and protect your personal data when utilizing our website and software services.',
        ]);
    }

    public function termsAndConditions(): View
    {
        return view('pages.terms-and-conditions', [
            'title' => 'Terms & Conditions | Stackxis Software Studio',
            'description' => 'Review the complete Terms & Conditions for using the Stackxis website and our custom software development, web design, and digital marketing services.',
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
            ['route' => 'about', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['route' => 'capabilities', 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['route' => 'work', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['route' => 'careers', 'priority' => '0.8', 'changefreq' => 'weekly'],
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

        $blogUrls = BlogPost::query()
            ->published()
            ->ordered()
            ->get()
            ->map(function (BlogPost $post) {
                $loc = e(route('blog.show', $post->slug));

                return implode("\n", [
                    '  <url>',
                    "    <loc>{$loc}</loc>",
                    "    <lastmod>{$post->published_at->format('Y-m-d')}</lastmod>",
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
