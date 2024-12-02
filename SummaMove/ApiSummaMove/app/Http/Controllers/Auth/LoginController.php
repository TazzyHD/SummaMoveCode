<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validatie van de inloggegevens
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Probeer de gebruiker te authenticeren
        if (Auth::attempt($request->only('email', 'password'))) {
            // De gebruiker is succesvol ingelogd, haal de gebruiker op
            $user = Auth::user();

            // Genereer een token voor de gebruiker
            $token = $user->createToken('Token Name')->plainTextToken;

            // Geef het token terug in de respons
            return response()->json([
                'message' => 'Inloggen succesvol',
                'token' => $token,
                'user' => $user // Optioneel, stuur de gebruikersinformatie terug
            ]);
        }

        // Als authenticatie mislukt
        return response()->json(['message' => 'Ongeldige inloggegevens'], 401);
    }
}
