<?php

namespace App\Http\Controllers;

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
            'title' => 'Join — Stackxis',
            'description' => 'Join a senior engineering studio that values craft, autonomy, and meaningful work. Open roles and how we hire.',
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'title' => 'Contact — Stackxis',
            'description' => 'Tell us about your project. Free 30-minute consultation with a senior engineer — no decks, no sales.',
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
        })->join("\n");

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n"
            .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n"
            .$urls."\n"
            .'</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }
}
