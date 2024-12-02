<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestatie;

class PrestatieController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valideer de inkomende gegevens
        $validatedData = $request->validate([
            'naam' => 'required|string|max:255',
            'beschrijving' => 'nullable|string',
            'datum' => 'required|date',
        ]);

        // Maak een nieuwe prestatie aan
        $prestatie = Prestatie::create($validatedData);

        return response()->json([
            'message' => 'Prestatie succesvol aangemaakt',
            'data' => $prestatie
        ], 201);
    }

    // Voeg eventueel nog de andere CRUD-methoden toe, zoals index, show, update, destroy
}
