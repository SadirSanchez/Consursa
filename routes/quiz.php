<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\Quizzes\quizzesController;

Route::middleware('auth')->group(function () {
    Route::get('/index', [quizzesController::class, 'index'])
        ->name('quiz.index');

});

