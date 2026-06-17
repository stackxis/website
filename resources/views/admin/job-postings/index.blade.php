@extends('layouts.admin')

@section('title', 'Job postings')
@section('heading', 'Job postings')

@section('actions')
    <a href="{{ route('admin.job-postings.create') }}" class="admin-btn admin-btn--primary">
        <i class="fas fa-plus" aria-hidden="true"></i>
        New job
    </a>
@endsection

@section('content')
    <div class="admin-panel overflow-x-auto">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Tags</th>
                    <th>Status</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($jobs as $job)
                    <tr>
                        <td>
                            <p class="font-medium">{{ $job->title }}</p>
                            <p class="text-xs text-muted-foreground mt-1">{{ $job->apply_url }}</p>
                        </td>
                        <td>{{ $job->tags }}</td>
                        <td>
                            <span class="admin-badge {{ $job->is_published ? 'admin-badge--success' : 'admin-badge--muted' }}">
                                {{ $job->is_published ? 'Published' : 'Draft' }}
                            </span>
                        </td>
                        <td class="text-right">
                            <a href="{{ route('admin.job-postings.edit', $job) }}" class="admin-link mr-4">Edit</a>
                            <form method="POST" action="{{ route('admin.job-postings.destroy', $job) }}" class="inline" onsubmit="return confirm('Delete this job posting?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="admin-link admin-link--danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted-foreground py-10">No job postings yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
