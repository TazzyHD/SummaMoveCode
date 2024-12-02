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
        $oefeningen = Oefening::all();

        return view('index', ['oefeningen' => $oefeningen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titel' => 'required|string|max:100',
            'instructie' => 'required|string|max:1000',
            'engelse_instructie' => 'required|string|max:1000'
        ]);

        Oefening::create($validatedData);

        return redirect()->route('oefeningen.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $oefening = Oefening::find($id);

        return view('show', ['oefening' => $oefening]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $oefening = Oefening::find($id);

        return view('edit', ['oefening' => $oefening]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'titel' => 'required|string|max:100',
            'instructie' => 'required|string|max:1000',
            'engelse_instructie' => 'required|string|max:1000'
        ]);

        $oefening = Oefening::findOrFail($id);
        $oefening->update($validatedData);

        return redirect()->route('oefeningen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Oefening::destroy($id);

        return redirect()->route('oefeningen.index');
    }
}
