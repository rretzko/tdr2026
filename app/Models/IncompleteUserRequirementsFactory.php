<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncompleteUserRequirementsFactory extends Model
{
    public static function needsOnboarding(): bool
    {
        return session('user_type') === 'teachers'
            ? self::needsOnboardingTeacher()
            : self::needsOnboardingStudent();
    }

    private static function needsOnboardingStudent(): bool
    {
        return true;
    }

    private static function needsOnboardingTeacher(): bool
    {
        return (auth()->user->schools || auth()->user->studios);
    }
}
