@extends('layouts.admin')

@section('title', 'Blog posts')
@section('heading', 'Blog posts')

@section('actions')
    <a href="{{ route('admin.blog-posts.create') }}" class="admin-btn admin-btn--primary">
        <i class="fas fa-plus" aria-hidden="true"></i>
        New post
    </a>
@endsection

@section('content')
    <div class="admin-panel overflow-x-auto">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Published</th>
                    <th>Status</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>
                            <p class="font-medium">{{ $post->title }}</p>
                            <p class="text-xs text-muted-foreground mt-1">{{ $post->slug }}</p>
                        </td>
                        <td>{{ $post->category }}</td>
                        <td>{{ $post->published_at->format('M j, Y') }}</td>
                        <td>
                            <span class="admin-badge {{ $post->is_published ? 'admin-badge--success' : 'admin-badge--muted' }}">
                                {{ $post->is_published ? 'Published' : 'Draft' }}
                            </span>
                        </td>
                        <td class="text-right">
                            <a href="{{ route('blog.show', $post->slug) }}" class="admin-link mr-4" target="_blank" rel="noopener">View</a>
                            <a href="{{ route('admin.blog-posts.edit', $post) }}" class="admin-link mr-4">Edit</a>
                            <form method="POST" action="{{ route('admin.blog-posts.destroy', $post) }}" class="inline" onsubmit="return confirm('Delete this post?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="admin-link admin-link--danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted-foreground py-10">No blog posts yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
