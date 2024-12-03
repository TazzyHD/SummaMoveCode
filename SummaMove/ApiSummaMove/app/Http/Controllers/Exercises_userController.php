<?php

namespace App\Http\Controllers;

use App\Models\Exercises_user;
use Illuminate\Http\Request;

class Exercises_userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get the authenticated user
        $user = $request->user();

        // Retrieve the exercises for the authenticated user
        $exerciseUser = Exercises_user::with('exercise')
            ->where('user_id', $user->id)
            ->get();

        // Map the data to the desired format
        $exerciseUser = $exerciseUser->map(function ($item) {
            return [
                'id' => $item->id,
                'exercise' => $item->exercise->titel,
                'reps' => $item->reps,
            ];
        });

        // Return the data as a JSON response
        return response()->json($exerciseUser);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'exercise_id' => 'required|exists:exercises,id',
            'reps' => 'required|integer',
        ]);

        $exerciseUser = new Exercises_user();
        $exerciseUser->user_id = $request->user()->id;
        $exerciseUser->exercise_id = $validatedData['exercise_id'];
        $exerciseUser->reps = $validatedData['reps'];
        $exerciseUser->save();

        return response()->json($exerciseUser, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($userId)
    {
        $exerciseUser = Exercises_user::with('exercise')
            ->where('user_id', $userId)
            ->get();

        $exerciseUser = $exerciseUser->map(function ($item) {
            return [
                'oefening' => $item->exercise->titel,
                'reps' => $item->reps,
            ];
        });

        return response()->json($exerciseUser);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercises_user $exerciseUser)
    {
        $exerciseUser::all();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercises_user $exerciseUser)
    {
        $validatedData = $request->validate([
            'exercise_id' => 'required|exists:exercise_id,id',
            'reps' => 'required|integer',
        ]);

        $exerciseUser->exercise_id = $validatedData['exercise_id'];
        $exerciseUser->reps = $validatedData['reps'];
        $exerciseUser->save();

        return response()->json($exerciseUser);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercises_user $exerciseUser)
    {
        $exerciseUser->delete();

        return response()->json();
    }
}
