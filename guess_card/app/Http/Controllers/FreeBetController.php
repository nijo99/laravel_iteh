<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreeBet;
class FreeBetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return FreeBet::all();
    }
    
    public function show(FreeBet $freeBet) {
        return $freeBet;
    }
    
    public function store(Request $request) {
        $freeBet = FreeBet::create($request->all());
        return response()->json($freeBet, 201);
    }
    
    public function update(Request $request, FreeBet $freeBet) {
        $freeBet->update($request->all());
        return response()->json($freeBet, 200);
    }
    
    public function destroy(FreeBet $freeBet) {
        $freeBet->delete();
        return response()->json(null, 204);
    }
}
