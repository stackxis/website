@extends('layouts.admin')

@section('title', 'Sign in')

@section('content')
    <div class="admin-login">
        <div class="admin-login__card">
            <p class="admin-login__eyebrow">Stackxis Admin</p>
            <h1 class="admin-login__title">Sign in</h1>
            <p class="admin-login__lead">Manage blog posts, job listings, and portfolio content.</p>

            <form method="POST" action="{{ route('admin.login.submit') }}" class="admin-login__form">
                @csrf

                <div class="admin-field">
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

                <div class="admin-field">
                    <label for="password" class="admin-label">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        class="admin-input"
                    >
                </div>

                <label class="admin-checkbox">
                    <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                    <span>Remember me</span>
                </label>

                <button type="submit" class="admin-btn admin-btn--primary admin-btn--block">
                    Sign in
                </button>
            </form>
        </div>
    </div>
@endsection
