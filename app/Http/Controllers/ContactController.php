<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'email' => ['required', 'email', 'max:200'],
            'company' => ['nullable', 'string', 'max:300'],
            'project_type' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:1500'],
        ]);

        // TODO: wire to mail/CRM — for now we acknowledge the submission.
        logger()->info('Contact form submission', $validated);

        return redirect()->route('contact')->with('sent', true);
    }
}
