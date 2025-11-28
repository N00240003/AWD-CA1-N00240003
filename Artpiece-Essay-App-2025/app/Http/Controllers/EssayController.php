<?php

namespace App\Http\Controllers;


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
         return view('essays.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Essay $essay)
    {
        $request->validate([
            'essay_id' => 'required|integer|max:255',
            'user_id' => 'required|string|max:255',
            'essay_title' => 'required|string|max:255',
            'essay_text' => 'required|string',
            'tags' => 'nullable|string|max:255',
        ]);

        $essay->essays()->create([
            'user_id' => auth()->id(), // Set the author as the currently authenticated user
            'essay_id' => $request->input('essay_id'),
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
    
        // return view('artpieces.show', compact('artpiece'));
        return view('essays.show', ['essay' => $essay]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Essay $essay)
    {
        // Checking to see if the user is the owner of the essay or an admin
        if (auth()->id() !== $essay->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('essay.index')->with('error', 'You do not have permission to edit this essay.');
        }
        // Passing the essay and essay objects to the edit view as they're both needed
        return view('essays.edit', compact('essay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Essay $essay)
    {
        //Check if the user is the owner of the essay or an admin
        if (auth()->id() !== $essay->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('essays.index')->with('error', 'You do not have permission to edit this essay.');
        }

         //Validate input data
        $request->validate([
            'essay_id' => 'required',
            'user_id' => 'required',
            'essay_title' => 'required|string|max:255',
            'essay_text' => 'required',
            'tags' => 'nullable|string|max:255',
        ]);

        // $essay->update([
        //     'essay_id' => $request->essay_id,
        //     'user_id' => $request->user()->id(),
        //     'essay_title' => $request->essay_title, 
        //     'essay_text' => $request->essay_text,
        //     'tags' => $request->tags,
        //     'updated_at' => now(),
        // ]);

        // Only updating the fields that are allowed to be changed
        $essay->update($request->only(['essay_title', 'essay_text', 'tags']));

        return redirect()->route('essays.show', $essay->essay_id)->with('success', 'Essay updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Essay $essay)
    {
       $essay->delete();
        return to_route('essays.index', $essay)->with('danger', 'Essay deleted successfully.');
    }

    // Search function for essays that matches titles
    public function essaysearch(Request $request)
    {
        $search = $request->input('search');
        // $search = "Mona";
        $essays = Essay::where('essay_title', 'like', "%$search%")->get();
        return view('essays.index', compact('essays'));
    }
}
