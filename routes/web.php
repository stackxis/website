<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/capabilities', [PageController::class, 'capabilities'])->name('capabilities');
Route::get('/expertise', [PageController::class, 'expertise'])->name('expertise');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/join', [PageController::class, 'join'])->name('join');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');

Route::get('/robots.txt', function () {
    $content = implode("\n", [
        'User-agent: *',
        'Allow: /',
        '',
        'Sitemap: '.route('sitemap'),
    ]);

    return response($content, 200, ['Content-Type' => 'text/plain']);
})->name('robots');

Route::redirect('/services', '/capabilities', 301);
Route::redirect('/solutions', '/expertise', 301);
Route::redirect('/careers', '/join', 301);
Route::redirect('/portfolio', '/work', 301);
