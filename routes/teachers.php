<?php

Route::get('/teachers', function () {
    return view('teachers.welcome');
})->name('teachers.home');

Route::view('/teachers/dashboard', 'dashboard_general')
    ->middleware(['auth', 'verified'])
    ->name('teachers.dashboard');

Route::view('/teachers/onboarding', 'teachers.onboarding')
    ->middleware(['auth', 'verified'])
    ->name('teachers.onboarding');

