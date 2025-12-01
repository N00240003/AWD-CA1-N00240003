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
        // Line 20 gets all artists with their associated artpieces
        // SELECT * FROM artists;
        // LEFT JOIN artist_artpiece ON artists.id = artist_artpiece.artist_id
        // LEFT JOIN artpieces ON artist_artpiece.artpiece_id = artpieces.id;

        $artists = Artist::with('artpieces')->get();
        $results = []; //Ensures that an empty array exists for looping in index
        $movements = Artist::select('movement')->distinct()->pluck('movement');
        return view('artists.index', compact('artists', 'movements'));
    
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
        $artpieces = Artist::all();
        return view('artists.create', compact('artpieces'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate input data
        // Here were using $validated to store the validated data 
        // so that we don't have to call $request->input('field_name') multiple times in Artist::create() method
        
        $validated = $request->validate([
            'name' => 'required',
            'nationality' => 'string|nullable|max:255',
            'birth_date' => 'date|nullable',
            'death_date' => 'date|nullable',
            'bio' => 'string|nullable|max:1000',
            'movement' => 'string|nullable|max:255',
            'portrait_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        //Get image from request 
        if ($request->hasFile('portrait_url')) {
            // Give it a unique name
            $imageName = time() . '.' . $request->portrait_url->extension();
            // Move it to public/images/artists
            $request->portrait_url->move(public_path('images/artists'), $imageName);
            // Set the portrait_url in validated data to the image name
            $validated['portrait_url'] = $imageName;
        }

        $artist = Artist::create($validated);

        // Check to see if user linked artpieces to that artist
        if ($request->has('artpieces')) {
            // attach() will create an entry in the pivot table for each artpiece the artist is linked to
            $artist->artpieces()->attach($request->input('artpieces'));
        }
        //Redirect to artist's index with success message
        return redirect()->route('artists.index')->with('success', 'Artist created successfully.');

    }


    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        // load() on $artist object will get all the artist's artpiece id 
        // from the pivot table and then fetch the corresponding artpiece records
        $artist->load('artpieces'); 
        return view('artists.show', compact('artist'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        // Get all artpieces
        $artpieces = Artist::all();
        // Get the artpiece IDs associated with the artist
        $artistArtpieces = $artist->artpieces->pluck('id')->toArray();
        return view('artists.edit', compact('artist', 'artpieces', 'artistArtpieces'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        //Validate input data
        $validated = $request->validate([
            'name' => 'required',
            'nationality' => 'string|nullable|max:255',
            'birth_date' => 'date|nullable',
            'death_date' => 'date|nullable',
            'bio' => 'string|nullable|max:1000',
            'movement' => 'string|nullable|max:255',
            'portrait_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        //Check if image is uploaded and handle it
        if ($request->hasFile('portrait_url')) {
            $imageName = time() . '.' . $request->portrait_url->extension();
            $request->portrait_url->move(public_path('images/artists'), $imageName);
        }

        //Create an artist record in the database
        $artist->update($validated);

        // Sync artpieces
        if ($request->has('artpieces')) {
            $artist->artpieces()->sync($request->input('artpieces'));
        } else {
            // If no artpieces selected, detach all
            $artist->artpieces()->detach();
        }

        //Redirect to artist's index with success message
        return redirect()->route('artists.index')->with('success', 'Artist updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        $artist->artpieces()->detach(); // Detach all associated artpieces so that foreign key constraints are not violated
        $artist->delete();
        return to_route('artists.index', $artist)->with('success', 'Artist deleted successfully.');
    }

    // Search function for artists 
    public function artistsearch(Request $request)
    {
        $movements = Artist::select('movement')->distinct()->pluck('movement');
        $search = $request->input('search');
        // $search = "Leonardo";
        $artists = Artist::where('name', 'like', "%$search%")->get();
        return view('artists.index', compact('artists', 'movements', 'search'));
    }
    public function artistfilter(Request $request)
    {
        //https://shouts.dev/articles/laravel-dd-vs-dump-vs-vardump-vs-printr-with-example
        // For debugging
        // dd($request->query('movement'));

        //dd() stands for Dump and Die.
        // Laravel will display the value of $request->query('movement') (what the browser sends) and stop execution.
        // This helps verify:
        // If the form is actually sending the movement parameter.
        // If $movement is being received correctly.

        // Get distinct movements for the dropdown
        $movements = Artist::select('movement')->distinct()->pluck('movement');
        // Apply filter if selected
        $movement = $request->query('movement');

        $artists = Artist::when($movement, function ($query, $movement) {
            return $query->where('movement', $movement);
        })->get();

        return view('artists.index', compact('artists', 'movements', 'movement'));
    }
}
