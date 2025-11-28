<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if (!$user) {
            $favArtpieces = collect(); // empty collection if no user is logged in
        } else {
            $favArtpieces = $user->favorites ?? collect();
        }

        return view('dashboard', compact('favArtpieces'));
    }
}
