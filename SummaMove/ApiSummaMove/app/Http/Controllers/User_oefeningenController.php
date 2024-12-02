<?php

namespace App\Http\Controllers;

use App\Models\User_oefeningen;
use Illuminate\Http\Request;

class User_oefeningenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();

        $userOefeningen = User_oefeningen::with('oefening')
            ->where('user_id', $user->id)
            ->get();

        $userOefeningen = $userOefeningen->map(function ($item) {
            return [
                'id' => $item->id,
                'oefening' => $item->oefening->titel,
                'reps' => $item->reps,
            ];
        });

        return response()->json($userOefeningen);

//        $request->user()->currentAccessToken();

//        $userOefeningen = User_oefeningen::with(['user', 'oefening'])->get();
//
//        $userOefeningen = $userOefeningen->map(function ($item) {
//            return [
//                'user' => $item->user->name,
//                'oefening' => $item->oefening->titel,
//                'reps' => $item->reps,
//            ];
//        });
//
//        return response()->json($userOefeningen);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'oefening_id' => 'required|exists:oefeningen,id',
            'reps' => 'required|integer',
        ]);

        $userOefening = new User_oefeningen();
        $userOefening->user_id = $request->user()->id;
        $userOefening->oefening_id = $validatedData['oefening_id'];
        $userOefening->reps = $validatedData['reps'];
        $userOefening->save();

        return response()->json($userOefening, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($userId)
    {
        $userOefeningen = User_oefeningen::with('oefening')
            ->where('user_id', $userId)
            ->get();

        $userOefeningen = $userOefeningen->map(function ($item) {
            return [
                'oefening' => $item->oefening->titel,
                'reps' => $item->reps,
            ];
        });

        return response()->json($userOefeningen);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User_oefeningen $user_oefening)
    {
        $user_oefening::all();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User_oefeningen $user_oefening)
    {
        $validatedData = $request->validate([
            'oefening_id' => 'required|exists:oefeningen,id',
            'reps' => 'required|integer',
        ]);

        $user_oefening->oefening_id = $validatedData['oefening_id'];
        $user_oefening->reps = $validatedData['reps'];
        $user_oefening->save();

        return response()->json($user_oefening);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User_oefeningen $user_oefening)
    {
        $user_oefening->delete();

        return response()->json();
    }
}
