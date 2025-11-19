<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request): RedirectResponse
    {
        // Check the intended URL (where they were trying to go before login)
        $intended = session()->get('url.intended', '');

        // Check the referrer (where they came from)
        $referer = $request->header('Referer', '');

        // Combine both for checking
        $checkUrl = $intended . ' ' . $referer;

        // Store user type in session for logout and redirect accordingly
        if (str_contains($checkUrl, 'teachers')) {
            session(['user_type' => 'teachers']);
            return redirect()->intended('/teachers/dashboard');
        }

        if (str_contains($checkUrl, 'students')) {
            session(['user_type' => 'students']);
            return redirect()->intended('/students/dashboard');
        }

        // Default fallback
        return redirect()->intended('/dashboard');
    }
}
