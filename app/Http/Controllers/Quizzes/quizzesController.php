<?php

namespace App\Http\Controllers\Quizzes;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class quizzesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render("quizzes/Index");
    }
}
