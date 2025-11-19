<?php

Route::get('/students', function () {
    return view('students.welcome');
})->name('students.home');

Route::view('/students/dashboard', 'dashboard_general')
    ->middleware(['auth', 'verified'])
    ->name('students.dashboard');
