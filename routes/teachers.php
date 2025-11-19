<?php

Route::get('/teachers', function () {
    return view('teachers.welcome');
})->name('teachers.home');

Route::view('/teachers/dashboard', 'dashboard_general')
    ->middleware(['auth', 'verified'])
    ->name('teachers.dashboard');

