<?php

namespace App\Http\Controllers;

use App\Models\Artpiece;
use App\Models\Essay;
use Illuminate\Http\Request;

class EssayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, Artpiece $artpiece)
    {
        $request->validate([
            'artpiece_id' => 'required|integer|max:255',
            'user_id' => 'required|string|max:255',
            'essay_title' => 'required|string|max:255',
            'essay_text' => 'required|string',
            'tags' => 'nullable|string|max:255',
        ]);

        $artpiece->essays()->create([
            'user_id' => auth()->id(), // Set the author as the currently authenticated user
            'artpiece_id' => $request->input('artpiece_id'),
            'essay_title' => $request->essay_title,
            'essay_text' => $request->essay_text,
            'tags' => $request->tags,
        ]);

        //Redirect to essays index with success message
        return redirect()->route('essays.index')->with('success', 'Essay added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Essay $essay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Essay $essay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Essay $essay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Essay $essay)
    {
        //
    }
}
