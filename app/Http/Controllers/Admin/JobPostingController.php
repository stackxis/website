<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobPostingController extends Controller
{
    public function index(): View
    {
        return view('admin.job-postings.index', [
            'jobs' => JobPosting::query()->ordered()->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.job-postings.create');
    }

    public function store(Request $request): RedirectResponse
    {
        JobPosting::query()->create($this->validated($request));

        return redirect()
            ->route('admin.job-postings.index')
            ->with('status', 'Job posting created.');
    }

    public function edit(JobPosting $jobPosting): View
    {
        return view('admin.job-postings.edit', ['job' => $jobPosting]);
    }

    public function update(Request $request, JobPosting $jobPosting): RedirectResponse
    {
        $jobPosting->update($this->validated($request));

        return redirect()
            ->route('admin.job-postings.index')
            ->with('status', 'Job posting updated.');
    }

    public function destroy(JobPosting $jobPosting): RedirectResponse
    {
        $jobPosting->delete();

        return redirect()
            ->route('admin.job-postings.index')
            ->with('status', 'Job posting deleted.');
    }

    /**
     * @return array<string, mixed>
     */
    private function validated(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'tags' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'apply_url' => ['required', 'string', 'max:500'],
            'date_posted' => ['nullable', 'date'],
            'valid_through' => ['nullable', 'date'],
            'employment_type' => ['required', 'string', 'max:50'],
            'identifier' => ['nullable', 'string', 'max:100'],
            'is_published' => ['sometimes', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]) + [
            'is_published' => $request->boolean('is_published'),
            'sort_order' => $request->input('sort_order', 0),
        ];
    }
}
