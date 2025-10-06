<?php

namespace App\Http\Controllers;

use App\Models\Artpiece;
use Illuminate\Http\Request;

class ArtpieceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artpieces = Artpiece::all();
        return view('artpieces.index', compact('artpieces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artpiece $artpiece)
    {
        return view('artpieces.show')->with('artpiece', $artpiece);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artpiece $artpiece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artpiece $artpiece)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artpiece $artpiece)
    {
        //
    }
}
