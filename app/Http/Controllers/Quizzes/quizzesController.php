<?php

namespace App\Http\Controllers\Quizzes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\User;
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




    public function store(Request $request)
    {
        // 1️⃣ Validar datos
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'required|string',
            'numQuestions' => 'required|integer|min:1',
            'timeLimit'    => 'required|integer|min:1',
        ]);

        // 2️⃣ Crear el quiz usando nombres de columnas correctos
        $quiz = Quiz::create([
            'title'         => $data['title'],
            'description'   => $data['description'],
            'numQuestions' => $data['numQuestions'],
            'timeLimit'    => $data['timeLimit'],
        ]);

        // 3️⃣ Redirigir a la lista con un mensaje de éxito
        return redirect()
            ->route('quizzes.index')
            ->with('success', 'Cuestionario creado correctamente.');
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
