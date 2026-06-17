@extends('layouts.admin')

@section('title', isset($job) ? 'Edit job posting' : 'New job posting')
@section('heading', isset($job) ? 'Edit job posting' : 'New job posting')

@section('actions')
    <a href="{{ route('admin.job-postings.index') }}" class="admin-btn admin-btn--ghost">← Back</a>
@endsection

@section('content')
    @php
        $job = $job ?? null;
    @endphp

    <form
        method="POST"
        action="{{ $job ? route('admin.job-postings.update', $job) : route('admin.job-postings.store') }}"
        class="admin-panel space-y-6"
    >
        @csrf
        @if ($job)
            @method('PUT')
        @endif

        <div class="grid gap-6 md:grid-cols-2">
            <div class="md:col-span-2">
                <label for="title" class="admin-label">Role title</label>
                <input id="title" name="title" type="text" value="{{ old('title', $job?->title) }}" required class="admin-input">
            </div>

            <div class="md:col-span-2">
                <label for="tags" class="admin-label">Tags line</label>
                <input id="tags" name="tags" type="text" value="{{ old('tags', $job?->tags) }}" required class="admin-input" placeholder="Remote · Next.js / Node.js · Full-Time">
            </div>

            <div class="md:col-span-2">
                <label for="description" class="admin-label">Description</label>
                <textarea id="description" name="description" rows="4" required class="admin-input">{{ old('description', $job?->description) }}</textarea>
            </div>

            <div class="md:col-span-2">
                <label for="apply_url" class="admin-label">Apply URL</label>
                <input id="apply_url" name="apply_url" type="text" value="{{ old('apply_url', $job?->apply_url) }}" required class="admin-input" placeholder="mailto:careers@stackxis.com?subject=...">
            </div>

            <div>
                <label for="date_posted" class="admin-label">Date posted <span class="text-muted-foreground">(optional)</span></label>
                <input id="date_posted" name="date_posted" type="date" value="{{ old('date_posted', $job?->date_posted?->format('Y-m-d')) }}" class="admin-input">
            </div>

            <div>
                <label for="valid_through" class="admin-label">Valid through <span class="text-muted-foreground">(optional)</span></label>
                <input id="valid_through" name="valid_through" type="date" value="{{ old('valid_through', $job?->valid_through?->format('Y-m-d')) }}" class="admin-input">
            </div>

            <div>
                <label for="employment_type" class="admin-label">Employment type</label>
                <input id="employment_type" name="employment_type" type="text" value="{{ old('employment_type', $job?->employment_type ?? 'FULL_TIME') }}" required class="admin-input">
            </div>

            <div>
                <label for="identifier" class="admin-label">Schema identifier <span class="text-muted-foreground">(optional)</span></label>
                <input id="identifier" name="identifier" type="text" value="{{ old('identifier', $job?->identifier) }}" class="admin-input">
            </div>

            <div>
                <label for="sort_order" class="admin-label">Sort order</label>
                <input id="sort_order" name="sort_order" type="number" min="0" value="{{ old('sort_order', $job?->sort_order ?? 0) }}" class="admin-input">
            </div>

            <div class="flex items-end">
                <label class="inline-flex items-center gap-2 text-sm">
                    <input type="checkbox" name="is_published" value="1" class="rounded border-hairline" {{ old('is_published', $job?->is_published ?? true) ? 'checked' : '' }}>
                    Published
                </label>
            </div>
        </div>

        <div class="flex justify-end gap-3 border-t border-hairline pt-6">
            <a href="{{ route('admin.job-postings.index') }}" class="admin-btn admin-btn--ghost">Cancel</a>
            <button type="submit" class="admin-btn admin-btn--primary">
                {{ $job ? 'Save changes' : 'Create job' }}
            </button>
        </div>
    </form>
@endsection
