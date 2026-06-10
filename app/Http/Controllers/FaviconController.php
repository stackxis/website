<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class FaviconController extends Controller
{
    private const FILES = [
        'favicon.ico' => 'image/x-icon',
        'favicon-16x16.png' => 'image/png',
        'favicon-32x32.png' => 'image/png',
        'apple-touch-icon.png' => 'image/png',
        'android-chrome-192x192.png' => 'image/png',
        'android-chrome-512x512.png' => 'image/png',
    ];

    public function manifest(): Response
    {
        $manifest = [
            'name' => 'Stackxis',
            'short_name' => 'Stackxis',
            'icons' => [
                [
                    'src' => asset('images/favicons/android-chrome-192x192.png'),
                    'sizes' => '192x192',
                    'type' => 'image/png',
                ],
                [
                    'src' => asset('images/favicons/android-chrome-512x512.png'),
                    'sizes' => '512x512',
                    'type' => 'image/png',
                ],
            ],
            'theme_color' => '#1a3a6e',
            'background_color' => '#ffffff',
            'display' => 'standalone',
        ];

        return response(
            json_encode($manifest, JSON_UNESCAPED_SLASHES),
            200,
            [
                'Content-Type' => 'application/manifest+json',
                'Cache-Control' => 'public, max-age=86400',
            ]
        );
    }

    public function show(string $file): BinaryFileResponse
    {
        if (! array_key_exists($file, self::FILES)) {
            abort(404);
        }

        $path = public_path("images/favicons/{$file}");

        if (! is_readable($path)) {
            abort(404);
        }

        return response()->file($path, [
            'Content-Type' => self::FILES[$file],
            'Cache-Control' => 'public, max-age=31536000',
        ]);
    }

    public function root(): BinaryFileResponse
    {
        return $this->show('favicon.ico');
    }
}
