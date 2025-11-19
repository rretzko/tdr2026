<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;

class LogoutResponse implements LogoutResponseContract
{
    public function toResponse($request): RedirectResponse
    {
        // Check session for user type (most reliable)
        $userType = session('user_type');

        if ($userType === 'teachers') {
            return redirect('/teachers');
        }

        if ($userType === 'students') {
            return redirect('/students');
        }

        // Fallback: Check the referrer URL
        $referer = $request->header('Referer', '');

        if (str_contains($referer, 'teachers')) {
            return redirect('/teachers');
        }

        if (str_contains($referer, 'students')) {
            return redirect('/students');
        }

        // Default fallback
        return redirect('/');
    }
}
