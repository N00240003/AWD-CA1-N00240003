<?php

use App\Http\Controllers\ArtpieceController;
use App\Http\Controllers\EssayController; // So we can use the EssayController
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Welcome page route
Route::get('/', function () {
    return view('welcome');
});
// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Resource route for essays
Route::resource('essays', EssayController::class);

// Grouped routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Routes for Index, Create and Show {Artpieces}
    Route::get('/artpieces', [ArtpieceController::class, 'index'])->name('artpieces.index');
    Route::get('/artpieces/create', [ArtpieceController::class, 'create'])->name('artpieces.create');
    Route::get('/artpieces{artpiece}', [ArtpieceController::class, 'show'])->name('artpieces.show');
    Route::post('/artpieces', [ArtpieceController::class, 'store'])->name('artpieces.store');

    //Routes for Edit, Update and Delete {Artpieces}
    Route::get('/artpieces/{artpiece}/edit', [ArtpieceController::class, 'edit'])->name('artpieces.edit');
    Route::put('/artpieces/{artpiece}', [ArtpieceController::class, 'update'])->name('artpieces.update');
    Route::delete('/artpieces/{artpiece}', [ArtpieceController::class, 'destroy'])->name('artpieces.destroy');

    // Attempted a tutorial
    // I added the following to lines of code in an attempt to add a search function to my project

    // This one would not work anyway as I am already using the route for my 'Welcome' page (see line 7-9) 
    //Route::get('/', 'ArtpieceController@index');
    //
    // The tutorial uses an unfamiliar syntax, so the logic may be correct but is just not meshing with the rest of my code
    // Laravel 8 and later prefer the "array syntax" for controllers (see lines 21-24 for examples) 
    //Route::get('/search', 'ArtpieceController@search')->name('artpieces.search');

    //Final route for my search function
    Route::get('/search', [ArtpieceController::class, 'search'])->name('artpieces.search');
});

require __DIR__ . '/auth.php';
