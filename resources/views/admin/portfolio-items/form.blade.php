@extends('layouts.admin')

@section('title', isset($item) ? 'Edit portfolio item' : 'New portfolio item')
@section('heading', isset($item) ? 'Edit portfolio item' : 'New portfolio item')

@section('actions')
    <a href="{{ route('admin.portfolio-items.index') }}" class="admin-btn admin-btn--ghost">← Back</a>
@endsection

@section('content')
    @php
        $item = $item ?? null;
        $selectedCategories = old('categories', $item?->categories ?? []);
    @endphp

    <form
        method="POST"
        action="{{ $item ? route('admin.portfolio-items.update', $item) : route('admin.portfolio-items.store') }}"
        class="admin-panel space-y-6"
    >
        @csrf
        @if ($item)
            @method('PUT')
        @endif

        <div class="rounded-xl border border-hairline bg-surface-muted p-5">
            <label class="inline-flex items-center gap-2 text-sm font-medium">
                <input type="checkbox" name="is_featured" value="1" class="rounded border-hairline" {{ old('is_featured', $item?->is_featured) ? 'checked' : '' }}>
                Featured deployment (hero section)
            </label>
            <p class="mt-2 text-sm text-muted-foreground">Only one featured item is shown on the portfolio page. Card items appear in the grid below.</p>
        </div>

        <div class="grid gap-6 md:grid-cols-2">
            <div>
                <label for="label" class="admin-label">Featured label</label>
                <input id="label" name="label" type="text" value="{{ old('label', $item?->label) }}" class="admin-input" placeholder="Logistics & Supply Chain">
            </div>

            <div>
                <label for="title" class="admin-label">Featured title</label>
                <input id="title" name="title" type="text" value="{{ old('title', $item?->title) }}" class="admin-input" placeholder="Cloud-Native Inventory ERP">
            </div>

            <div class="md:col-span-2">
                <label for="headline" class="admin-label">Featured headline / Card metric</label>
                <input id="headline" name="headline" type="text" value="{{ old('headline', $item?->headline) }}" class="admin-input" placeholder="40% reduction in global warehouse processing latency.">
            </div>

            <div>
                <label for="industry" class="admin-label">Industry</label>
                <input id="industry" name="industry" type="text" value="{{ old('industry', $item?->industry) }}" class="admin-input">
            </div>

            <div>
                <label for="deployment_type" class="admin-label">Deployment type</label>
                <input id="deployment_type" name="deployment_type" type="text" value="{{ old('deployment_type', $item?->deployment_type) }}" class="admin-input" placeholder="POS Architecture">
            </div>

            <div>
                <label for="year" class="admin-label">Year</label>
                <input id="year" name="year" type="text" maxlength="4" value="{{ old('year', $item?->year) }}" class="admin-input" placeholder="2025">
            </div>

            <div>
                <label for="metric" class="admin-label">Card metric</label>
                <input id="metric" name="metric" type="text" value="{{ old('metric', $item?->metric) }}" class="admin-input">
            </div>

            <div class="md:col-span-2">
                <label for="summary" class="admin-label">Summary</label>
                <textarea id="summary" name="summary" rows="4" required class="admin-input">{{ old('summary', $item?->summary) }}</textarea>
            </div>

            <div class="md:col-span-2">
                <label for="stack" class="admin-label">Tech stack <span class="text-muted-foreground">(comma-separated)</span></label>
                <input id="stack" name="stack" type="text" value="{{ old('stack', $item ? implode(', ', $item->stack) : '') }}" required class="admin-input" placeholder="React, TypeScript, Redis">
            </div>

            <div class="md:col-span-2">
                <label for="url" class="admin-label">Case study URL</label>
                <input id="url" name="url" type="text" value="{{ old('url', $item?->url) }}" class="admin-input">
            </div>

            <div class="md:col-span-2">
                <span class="admin-label">Filter categories</span>
                <div class="mt-3 flex flex-wrap gap-4">
                    @foreach ($categoryOptions as $value => $label)
                        <label class="inline-flex items-center gap-2 text-sm">
                            <input
                                type="checkbox"
                                name="categories[]"
                                value="{{ $value }}"
                                class="rounded border-hairline"
                                {{ in_array($value, $selectedCategories, true) ? 'checked' : '' }}
                            >
                            {{ $label }}
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <label for="sort_order" class="admin-label">Sort order</label>
                <input id="sort_order" name="sort_order" type="number" min="0" value="{{ old('sort_order', $item?->sort_order ?? 0) }}" class="admin-input">
            </div>

            <div class="flex items-end">
                <label class="inline-flex items-center gap-2 text-sm">
                    <input type="checkbox" name="is_published" value="1" class="rounded border-hairline" {{ old('is_published', $item?->is_published ?? true) ? 'checked' : '' }}>
                    Published
                </label>
            </div>
        </div>

        <div class="flex justify-end gap-3 border-t border-hairline pt-6">
            <a href="{{ route('admin.portfolio-items.index') }}" class="admin-btn admin-btn--ghost">Cancel</a>
            <button type="submit" class="admin-btn admin-btn--primary">
                {{ $item ? 'Save changes' : 'Create item' }}
            </button>
        </div>
    </form>
@endsection
