<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;
use Throwable;

class ContactController extends Controller
{
   public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'name'          => ['required', 'string', 'max:200'],
        'business_name' => ['nullable', 'string', 'max:200'],
        'email'         => ['required', 'email', 'max:200'],
        'phone'         => ['required', 'string', 'max:20'],
        'project_type'  => ['required', 'string', 'max:100'],
        'message'       => ['required', 'string', 'max:1500'],
        'cf-turnstile-response' => ['required', new Turnstile()],   // ← Turnstile validation
    ]);

    try {
        Mail::to(config('mail.contact_recipient'))->send(new ContactFormSubmitted($validated));
    } catch (Throwable $exception) {
        report($exception);

        return back()
            ->withInput()
            ->withErrors([
                'email' => 'We could not send your message right now. Please try again or email us at hello@stackxis.com.',
            ]);
    }

    return redirect()->route('contact')->with('sent', true);
}
}
