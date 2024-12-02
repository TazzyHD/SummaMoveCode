<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oefening;

class OefeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Oefening::all();
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
            'titel' => 'required|string|max:255',
            'instructie' => 'required|string',
            'engelse_instructie' => 'nullable|string',
        ]);

        // Creëer een nieuwe oefening
        $oefening = Oefening::create($request->all());
        return response()->json($oefening, 201); // 201 Created
    }

    /**
     * Display the specified resource.
     */
    public function show(Oefening $oefening)
    {
        return response()->json($oefening);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oefening $oefening)
    {
        // Deze methode is niet nodig voor API's, maar kan worden gebruikt in een webapplicatie.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oefening $oefening)
    {
        // Validatie van de request
        $request->validate([
            'titel' => 'required|string|max:255',
            'instructie' => 'required|string',
            'engelse_instructie' => 'nullable|string',
        ]);

        // Update de oefening
        $oefening->update($request->all());
        return response()->json($oefening);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oefening $oefening)
    {
        $oefening->delete();
        return response()->json(['message' => 'Oefening deleted successfully.']);
    }
}
