<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            'title' => 'Story — Stackxis',
            'description' => "The story behind Stackxis — our mission, values, and the engineering principles that guide every build.",
        ]);
    }

    public function services(): View
    {
        return view('pages.services', [
            'title' => 'Capabilities — Stackxis',
            'description' => 'Product engineering, platform & cloud, applied AI, and design systems — senior teams delivering production-grade software.',
        ]);
    }

    public function solutions(): View
    {
        return view('pages.solutions', [
            'title' => 'Expertise — Stackxis',
            'description' => 'Industries we know deeply and the technologies we reach for — from fintech to healthcare, React to Kubernetes.',
        ]);
    }

    public function portfolio(): View
    {
        return view('pages.portfolio', [
            'title' => 'Case Studies — Stackxis',
            'description' => 'A selection of builds and platforms Stackxis has designed, engineered, and scaled with clients across industries.',
        ]);
    }

    public function careers(): View
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

    public function sitemap(): \Illuminate\Http\Response
    {
        $paths = ['/', '/about', '/services', '/solutions', '/portfolio', '/careers', '/contact'];
        $baseUrl = config('app.url');

        $urls = collect($paths)->map(function ($path) use ($baseUrl) {
            return '  <url><loc>'.rtrim($baseUrl, '/').$path.'</loc><changefreq>weekly</changefreq></url>';
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
