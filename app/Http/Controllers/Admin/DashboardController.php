<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\JobPosting;
use App\Models\PortfolioItem;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'stats' => [
                'blog_posts' => BlogPost::query()->count(),
                'job_postings' => JobPosting::query()->count(),
                'portfolio_items' => PortfolioItem::query()->count(),
            ],
        ]);
    }
}
