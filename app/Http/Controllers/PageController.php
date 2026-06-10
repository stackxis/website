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
            'title' => 'About — Stackxis',
            'description' => "We're a senior engineering studio building software that lasts. Learn our story, mission, and the values behind our work.",
        ]);
    }

    public function services(): View
    {
        return view('pages.services', [
            'title' => 'Services — Stackxis',
            'description' => 'Product engineering, platform & cloud, applied AI, and design systems. Senior teams delivering production-grade software.',
        ]);
    }

    public function solutions(): View
    {
        return view('pages.solutions', [
            'title' => 'Solutions & Expertise — Stackxis',
            'description' => 'Industries we serve and the technologies we specialize in — from fintech to healthcare, React to Kubernetes.',
        ]);
    }

    public function portfolio(): View
    {
        return view('pages.portfolio', [
            'title' => 'Case Studies — Stackxis',
            'description' => 'A selection of products and platforms Stackxis has designed, built, and scaled with clients across industries.',
        ]);
    }

    public function careers(): View
    {
        return view('pages.careers', [
            'title' => 'Careers — Stackxis',
            'description' => 'Join a senior engineering studio that values craft, autonomy, and meaningful work. Current openings and how we hire.',
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
