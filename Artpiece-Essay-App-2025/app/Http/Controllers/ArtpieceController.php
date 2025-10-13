<?php

namespace App\Http\Controllers;

use App\Models\Artpiece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // MAY BE NEEDED FOR STORE FUNCTION (For handling file uploads)
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
        return view('artpieces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate input data
        $request->validate([
        'title' => 'required',
        'description' => 'required',
        'img_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        'type' => 'required',
        'year' => 'required|date',
        ]);

        //Check if image is uploaded and handle it
        if ($request->hasFile('img_url')) {
          $imageName = time().'.'.$request->img_url->extension();
          $request->img_url->move(public_path('images/artpieces'), $imageName);
        }

        //Create an artpiece record in the database
        Artpiece::create([
        'title' => $request->title,
        'description' => $request->description,
        'img_url' => $imageName ?? $request->img_url, // Use uploaded image name or URL
        'type' => $request->type,
        'year' => $request->year,
        'created_at' => now(),
        ]); 

        //Redirect to artpieces index with success message
        return redirect()->route('artpieces.index')->with('success', 'Artpiece created successfully.');

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
        return view('artpieces.edit')->with('artpiece', $artpiece);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artpiece $artpiece)
    {
  //Validate input data
        $request->validate([
        'title' => 'required',
        'description' => 'required',
        'img_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        'type' => 'required',
        'year' => 'required|date',
        ]);

        //Check if image is uploaded and handle it
        if ($request->hasFile('img_url')) {
          $imageName = time().'.'.$request->img_url->extension();
          $request->img_url->move(public_path('images/artpieces'), $imageName);
        }

        $artpiece->update([
        'title' => $request->title,
        'description' => $request->description,
        'img_url' => $imageName ?? $request->img_url, // Use uploaded image name or URL
        'type' => $request->type,
        'year' => $request->year,
        'updated_at' => now(),
        ]);

        return to_route('artpieces.index', $artpiece)->with('success', 'Artpiece updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artpiece $artpiece)
    {
        //
    }
}
