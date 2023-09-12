<?php

namespace App\Http\Controllers;
use App\Models\Guess;
use Illuminate\Http\Request;

class GuessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guesses = Guess::all(); // Retrieves all guesses from the database
        return response()->json($guesses); // Returns the collection of guesses as JSON
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function show(string $id)
    {
        $guess = Guess::find($id); // Retrieves a guess by its ID
    
        if(!$guess) {
            return response()->json(['error' => 'Guess not found'], 404); // If not found, return an error with HTTP status 404 (Not Found)
        }
    
        return response()->json($guess); // Returns the found guess as JSON
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
