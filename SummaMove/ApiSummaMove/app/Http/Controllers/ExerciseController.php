<?php

namespace App\Http\Controllers;

use App\Models\Exercises;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Exercises::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Deze methode is niet nodig voor API's, maar kan worden gebruikt in een webapplicatie.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validatie van de request
        $request->validate([
            'title' => 'required|string|max:255',
            'instruction' => 'required|string',
        ]);

        // Creëer een nieuwe oefening
        $exercise = Exercises::create($request->all());
        return response()->json($exercise, 201); // 201 Created
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercises $exercise)
    {
        return response()->json($exercise);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercises $exercise)
    {
        // Deze methode is niet nodig voor API's, maar kan worden gebruikt in een webapplicatie.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercises $exercise)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'instruction' => 'required|string',
        ]);

        // Update de oefening
        $exercise->update($request->all());
        return response()->json($exercise);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercises $exercise)
    {
        $exercise->delete();
        return response()->json(['message' => 'Deleted the exercise successful.']);
    }
}
