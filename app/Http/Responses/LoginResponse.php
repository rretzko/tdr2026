<?php

namespace App\Http\Responses;

use App\Models\IncompleteUserRequirementsFactory;
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

            // REGISTER user_type session variable
            session(['user_type' => 'teachers']);

            //For a new user, or teacher missing school or studio values, return onboarding process
            if(IncompleteUserRequirementsFactory::needsOnboarding()){
                return redirect()->intended('/teachers/onboarding');
            }

            return redirect()->intended('/teachers/dashboard');


        }

        if (str_contains($checkUrl, 'students')) {
            session(['user_type' => 'students']);
            return redirect()->intended('/students/dashboard');
        }

        // Default fallback
        return redirect()->intended('/dashboard');
    }

    private function IncompleteUserRequirementsFactory()
    {
    }
}
