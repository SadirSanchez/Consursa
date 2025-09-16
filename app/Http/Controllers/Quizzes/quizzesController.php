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

    /**
     * Show the form for creating a new resource.
     */
    public function show()
    {
        return Inertia::render("quizzes/Show");
    }


    /**
     * Display the specified resource.
     */
    public function result()
    {
        return Inertia::render("quizzes/Result");
    }

    /**
     * Display the specified resource.
     */
    public function history()
    {
        return Inertia::render("quizzes/History");
    }
}
