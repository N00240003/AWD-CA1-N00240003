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
        $essays = Essay::all();
        $results = []; //Ensures that an empty array exists for looping in index
        return view('essays.index', compact('essays'));
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
    public function store(Request $request, Essay $essay)
    {
        $request->validate([
            'artpiece_id' => 'required|integer|max:255',
            'user_id' => 'required|string|max:255',
            'essay_title' => 'required|string|max:255',
            'essay_text' => 'required|string',
            'tags' => 'nullable|string|max:255',
        ]);

        $essay->essays()->create([
            'user_id' => auth()->user()->id(), // Set the author as the currently authenticated user
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
         //Validate input data
        $request->validate([
            'artpiece_id' => 'required',
            'user_id' => 'required',
            'essay_title' => 'required|string|max:255',
            'essay_text' => 'required',
            'tags' => 'nullable|string|max:255',
        ]);

        $essay->update([
            'artpiece_id' => $request->artpiece_id,
            'user_id' => $request->user()->id(),
            'essay_title' => $request->essay_title, 
            'essay_text' => $request->essay_text,
            'tags' => $request->tags,
            'updated_at' => now(),
        ]);

        return to_route('essays.index', $essay)->with('success', 'Essay updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Essay $essay)
    {
        //
    }
}
