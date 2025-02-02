<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'page.home')->name('home');

// for authorized users
Route::post('/register', [AuthController::class, 'register'])->name('register');

// for authorized users
Route::controller(SocialiteController::class)->group(function() {
    Route::get('/auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/questionnaire', 'questionnaire')->name('auth.questionnaire');
});

// for login functionality
Route::post('/login', [AuthController::class, 'login'])->name('login');

// for logut functionality
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::view('questionnaire', 'auth.questionnaire')->name('questionnaire');
// protect this route from user without authorization
Route::get('/questionnaire', [QuestionnaireController::class, 'index'])->name('questionnaire');