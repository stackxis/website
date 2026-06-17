@extends('layouts.admin')

@section('title', 'Sign in')

@section('content')
    <div class="admin-login">
        <div class="admin-login__card">
            <p class="text-xs uppercase tracking-widest text-brand-azure font-medium">Stackxis Admin</p>
            <h1 class="mt-3 text-3xl font-bold">Sign in</h1>
            <p class="mt-2 text-muted-foreground">Manage blog posts, job listings, and portfolio content.</p>

            <form method="POST" action="{{ route('admin.login.submit') }}" class="mt-8 space-y-5">
                @csrf

                <div>
                    <label for="email" class="admin-label">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="admin-input"
                    >
                </div>

                <div>
                    <label for="password" class="admin-label">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        class="admin-input"
                    >
                </div>

                <label class="inline-flex items-center gap-2 text-sm text-muted-foreground">
                    <input type="checkbox" name="remember" value="1" class="rounded border-hairline" {{ old('remember') ? 'checked' : '' }}>
                    Remember me
                </label>

                <button type="submit" class="admin-btn admin-btn--primary w-full">
                    Sign in
                </button>
            </form>
        </div>
    </div>
@endsection
