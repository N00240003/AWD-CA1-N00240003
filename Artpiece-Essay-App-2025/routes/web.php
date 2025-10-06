<?php

use App\Http\Controllers\ArtpieceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/artpieces', [ArtpieceController::class, 'index'])->name('artpieces.index');
    Route::get('/artpieces', [ArtpieceController::class, 'create'])->name('artpieces.create');
    Route::get('/artpieces{artpiece}', [ArtpieceController::class, 'show'])->name('artpieces.show');
    Route::post('/artpieces', [ArtpieceController::class, 'store'])->name('artpieces.store');

    Route::get('/artpieces/{artpiece}/edit', [ArtpieceController::class, 'edit'])->name('artpieces.edit');
    Route::put('/artpieces/{artpiece}', [ArtpieceController::class, 'update'])->name('artpieces.update');
    Route::delete('/artpieces/{artpiece}', [ArtpieceController::class, 'destroy'])->name('artpieces.destroy');
});

require __DIR__.'/auth.php';
