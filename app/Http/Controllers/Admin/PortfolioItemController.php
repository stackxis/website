<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioItemController extends Controller
{
    public function index(): View
    {
        return view('admin.portfolio-items.index', [
            'items' => PortfolioItem::query()->ordered()->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.portfolio-items.create', [
            'categoryOptions' => $this->categoryOptions(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        PortfolioItem::query()->create($this->validated($request));

        return redirect()
            ->route('admin.portfolio-items.index')
            ->with('status', 'Portfolio item created.');
    }

    public function edit(PortfolioItem $portfolioItem): View
    {
        return view('admin.portfolio-items.edit', [
            'item' => $portfolioItem,
            'categoryOptions' => $this->categoryOptions(),
        ]);
    }

    public function update(Request $request, PortfolioItem $portfolioItem): RedirectResponse
    {
        $portfolioItem->update($this->validated($request));

        return redirect()
            ->route('admin.portfolio-items.index')
            ->with('status', 'Portfolio item updated.');
    }

    public function destroy(PortfolioItem $portfolioItem): RedirectResponse
    {
        $portfolioItem->delete();

        return redirect()
            ->route('admin.portfolio-items.index')
            ->with('status', 'Portfolio item deleted.');
    }

    /**
     * @return array<string, string>
     */
    private function categoryOptions(): array
    {
        return [
            'cloud-erp' => 'Cloud ERPs',
            'pos' => 'POS Systems',
            'saas' => 'SaaS Platforms',
            'rescue' => 'Application Rescue',
            'web' => 'Web & Marketing',
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function validated(Request $request): array
    {
        $data = $request->validate([
            'is_featured' => ['sometimes', 'boolean'],
            'categories' => ['nullable', 'array'],
            'categories.*' => ['string', 'max:50'],
            'label' => ['nullable', 'string', 'max:255'],
            'headline' => ['nullable', 'string', 'max:255'],
            'title' => ['nullable', 'string', 'max:255'],
            'industry' => ['nullable', 'string', 'max:255'],
            'deployment_type' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'string', 'size:4'],
            'metric' => ['nullable', 'string', 'max:255'],
            'summary' => ['required', 'string'],
            'stack' => ['required', 'string'],
            'url' => ['nullable', 'string', 'max:500'],
            'is_published' => ['sometimes', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $stack = collect(explode(',', $data['stack']))
            ->map(fn (string $item) => trim($item))
            ->filter()
            ->values()
            ->all();

        return [
            'is_featured' => $request->boolean('is_featured'),
            'categories' => $data['categories'] ?? [],
            'label' => $data['label'] ?? null,
            'headline' => $data['headline'] ?? null,
            'title' => $data['title'] ?? null,
            'industry' => $data['industry'] ?? null,
            'deployment_type' => $data['deployment_type'] ?? null,
            'year' => $data['year'] ?? null,
            'metric' => $data['metric'] ?? null,
            'summary' => $data['summary'],
            'stack' => $stack,
            'url' => $data['url'] ?? null,
            'is_published' => $request->boolean('is_published'),
            'sort_order' => $request->input('sort_order', 0),
        ];
    }
}
