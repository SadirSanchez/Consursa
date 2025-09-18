<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\Quizzes\quizzesController;

Route::middleware('auth')->group(function () {

    Route::get('/quizzes', [quizzesController::class, 'index'])
        ->name('quizzes.index');

    Route::post('/quizzes/store', [quizzesController::class, 'store'])
        ->name('quizzes.store');

    Route::get('/quizzes/{quiz}', [quizzesController::class, 'show'])
        ->name('quizzes.show');

    Route::get('/quizzes/{quiz}/results', [quizzesController::class, 'result'])
        ->name('quizzes.result');

    Route::get('/my-results', [quizzesController::class, 'history'])
        ->name('quizzes.history');
});
