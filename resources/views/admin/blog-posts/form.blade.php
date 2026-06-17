@extends('layouts.admin')

@section('title', isset($post) ? 'Edit blog post' : 'New blog post')
@section('heading', isset($post) ? 'Edit blog post' : 'New blog post')

@section('actions')
    <a href="{{ route('admin.blog-posts.index') }}" class="admin-btn admin-btn--ghost">← Back</a>
@endsection

@section('content')
    @php
        $post = $post ?? null;
    @endphp

    <form
        method="POST"
        action="{{ $post ? route('admin.blog-posts.update', $post) : route('admin.blog-posts.store') }}"
        class="admin-panel space-y-6"
    >
        @csrf
        @if ($post)
            @method('PUT')
        @endif

        <div class="grid gap-6 md:grid-cols-2">
            <div class="md:col-span-2">
                <label for="title" class="admin-label">Title</label>
                <input id="title" name="title" type="text" value="{{ old('title', $post?->title) }}" required class="admin-input">
            </div>

            <div>
                <label for="slug" class="admin-label">Slug <span class="text-muted-foreground">(optional)</span></label>
                <input id="slug" name="slug" type="text" value="{{ old('slug', $post?->slug) }}" class="admin-input" placeholder="auto-generated from title">
            </div>

            <div>
                <label for="category" class="admin-label">Category</label>
                <input id="category" name="category" type="text" value="{{ old('category', $post?->category) }}" required class="admin-input">
            </div>

            <div>
                <label for="published_at" class="admin-label">Published date</label>
                <input id="published_at" name="published_at" type="date" value="{{ old('published_at', $post?->published_at?->format('Y-m-d')) }}" required class="admin-input">
            </div>

            <div>
                <label for="read_time" class="admin-label">Read time</label>
                <input id="read_time" name="read_time" type="text" value="{{ old('read_time', $post?->read_time ?? '5 min read') }}" required class="admin-input">
            </div>

            <div>
                <label for="author" class="admin-label">Author</label>
                <input id="author" name="author" type="text" value="{{ old('author', $post?->author ?? 'Stackxis Engineering') }}" required class="admin-input">
            </div>

            <div>
                <label for="image" class="admin-label">Cover image path</label>
                <input id="image" name="image" type="text" value="{{ old('image', $post?->image) }}" required class="admin-input" placeholder="images/blog/engineering.svg">
            </div>

            <div>
                <label for="image_alt" class="admin-label">Cover image alt text</label>
                <input id="image_alt" name="image_alt" type="text" value="{{ old('image_alt', $post?->image_alt) }}" required class="admin-input">
            </div>

            <div class="md:col-span-2">
                <label for="excerpt" class="admin-label">Excerpt</label>
                <textarea id="excerpt" name="excerpt" rows="3" required class="admin-input">{{ old('excerpt', $post?->excerpt) }}</textarea>
            </div>

            <div class="md:col-span-2">
                <label for="content" class="admin-label">Content (HTML)</label>
                <textarea id="content" name="content" rows="18" required class="admin-input font-mono text-sm">{{ old('content', $post?->content) }}</textarea>
            </div>

            <div>
                <label for="sort_order" class="admin-label">Sort order</label>
                <input id="sort_order" name="sort_order" type="number" min="0" value="{{ old('sort_order', $post?->sort_order ?? 0) }}" class="admin-input">
            </div>

            <div class="flex items-end">
                <label class="inline-flex items-center gap-2 text-sm">
                    <input type="checkbox" name="is_published" value="1" class="rounded border-hairline" {{ old('is_published', $post?->is_published ?? true) ? 'checked' : '' }}>
                    Published
                </label>
            </div>
        </div>

        <div class="flex justify-end gap-3 border-t border-hairline pt-6">
            <a href="{{ route('admin.blog-posts.index') }}" class="admin-btn admin-btn--ghost">Cancel</a>
            <button type="submit" class="admin-btn admin-btn--primary">
                {{ $post ? 'Save changes' : 'Create post' }}
            </button>
        </div>
    </form>
@endsection
