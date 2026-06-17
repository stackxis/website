@extends('layouts.admin')

@section('title', 'Portfolio')
@section('heading', 'Portfolio')

@section('actions')
    <a href="{{ route('admin.portfolio-items.create') }}" class="admin-btn admin-btn--primary">
        <i class="fas fa-plus" aria-hidden="true"></i>
        New item
    </a>
@endsection

@section('content')
    <div class="admin-panel overflow-x-auto">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>
                            <p class="font-medium">
                                {{ $item->is_featured ? ($item->title ?? 'Featured deployment') : ($item->metric ?? 'Portfolio card') }}
                            </p>
                            @if ($item->industry)
                                <p class="text-xs text-muted-foreground mt-1">{{ $item->industry }}</p>
                            @endif
                        </td>
                        <td>
                            <span class="admin-badge {{ $item->is_featured ? 'admin-badge--info' : 'admin-badge--muted' }}">
                                {{ $item->is_featured ? 'Featured' : 'Card' }}
                            </span>
                        </td>
                        <td>
                            <span class="admin-badge {{ $item->is_published ? 'admin-badge--success' : 'admin-badge--muted' }}">
                                {{ $item->is_published ? 'Published' : 'Draft' }}
                            </span>
                        </td>
                        <td class="text-right">
                            <a href="{{ route('admin.portfolio-items.edit', $item) }}" class="admin-link mr-4">Edit</a>
                            <form method="POST" action="{{ route('admin.portfolio-items.destroy', $item) }}" class="inline" onsubmit="return confirm('Delete this portfolio item?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="admin-link admin-link--danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted-foreground py-10">No portfolio items yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
