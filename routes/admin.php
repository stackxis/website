<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobPostingController;
use App\Http\Controllers\Admin\PortfolioItemController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('blog-posts', BlogPostController::class)->except(['show']);
    Route::resource('job-postings', JobPostingController::class)->except(['show']);
    Route::resource('portfolio-items', PortfolioItemController::class)->except(['show']);

    //to run migrations
    Route::get('/migrate', function () {
        Artisan::call('migrate');
        return 'Migrations run successfully';
    });

    //to run seeders
    Route::get('/seed', function () {
        Artisan::call('db:seed');
        return 'Seeders run successfully';
    });

    //to run migrations and seeders
    Route::get('/migrate-and-seed', function () {
        Artisan::call('migrate --seed');
        return 'Migrations and seeders run successfully';
    });

});
