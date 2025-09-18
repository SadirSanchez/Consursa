<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\Quizzes\quizzesController;

Route::middleware('auth')->group(function () {

    Route::get('/quizzes', [quizzesController::class, 'index'])
        ->name('quizzes.index');

    Route::get('/quizzes/create', function () {
        return Inertia::render('quizzes/Create');
    })->name('quizzes.create');

    Route::get('/quizzes/{quiz}', [quizzesController::class, 'show'])
        ->name('quizzes.show');

    Route::get('/quizzes/{quiz}/results', [quizzesController::class, 'result'])
        ->name('quizzes.result');

    Route::get('/my-results', [quizzesController::class, 'history'])
        ->name('quizzes.history');
});
