<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        $results = []; //Ensures that an empty array exists for looping in index
        return view('artists.index', compact('artists'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Only allow admin users to access the create artist form
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('artists.index')->with('error', 'You do not have permission to add artists.');
        }
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate input data
        $request->validate([
            'name' => 'required',
            'nationality' => 'string|nullable|max:255',
            'birth_date' => 'date|nullable',
            'death_date' => 'date|nullable',
            'bio' => 'string|nullable|max:1000',
            'movement' => 'varchar|nullable|max:255',
            'portrait_url' => 'string|nullable|max:255',
        ]);

        //Check if image is uploaded and handle it
        if ($request->hasFile('portrait_url')) {
            $imageName = time() . '.' . $request->portrait_url->extension();
            $request->portrait_url->move(public_path('images/artists'), $imageName);
        }

        //Create an artist record in the database
        Artist::create([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'birth_date' => $request->birth_date,
            'death_date' => $request->death_date,
            'bio' => $request->bio,
            'movement' => $request->movement,
            'portrait_url' => $imageName ?? $request->portrait_url,
            'created_at' => now(),
        ]);

        //Redirect to artist's index with success message
        return redirect()->route('artists.index')->with('success', 'Artist created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        $artist->load('artpieces'); //Eager load related artpieces
        return view('artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        {
        return view('artists.edit')->with('artist', $artist);
    }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        //Validate input data
        $request->validate([
            'name' => 'required',
            'nationality' => 'string|nullable|max:255',
            'birth_date' => 'date|nullable',
            'death_date' => 'date|nullable',
            'bio' => 'string|nullable|max:1000',
            'movement' => 'varchar|nullable|max:255',
            'portrait_url' => 'string|nullable|max:255',
        ]);

        //Check if image is uploaded and handle it
        if ($request->hasFile('portrait_url')) {
            $imageName = time() . '.' . $request->portrait_url->extension();
            $request->portrait_url->move(public_path('images/artists'), $imageName);
        }

        //Create an artist record in the database
        $artist->update([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'birth_date' => $request->birth_date,
            'death_date' => $request->death_date,
            'bio' => $request->bio,
            'movement' => $request->movement,
            'portrait_url' => $imageName ?? $request->portrait_url,
            'updated_at' => now(),
        ]);

        //Redirect to artist's index with success message
        return to_route('artists.index', $artist)->with('success', 'Artist updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return to_route('artists.index', $artist)->with('danger', 'Artist deleted successfully.');
    }

    // Search function for artists 
    public function search(Request $request)
    {
        $search = $request->input('search');
        // $search = "Leonardo";
        $artists = Artist::where('name', 'like', "%$search%")->get();
        return view('artists.index', compact('artists'));
    }
}
