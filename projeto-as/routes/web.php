<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtworkController;
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
});

Route::get('artists', [ArtistController::class, 'index']);
    Route::get('artists/create', [ArtistController::class, 'create']);
    Route::post('artists', [ArtistController::class, 'store']);
    Route::get('artists/{id}/edit', [ArtistController::class, 'edit']);
    Route::put('artists/{id}', [ArtistController::class, 'update']);
    Route::delete('artists/{id}', [ArtistController::class, 'destroy']);

    Route::get('artworks', [ArtworkController::class, 'index']);
    Route::get('artworks/create', [ArtworkController::class, 'create']);
    Route::post('artworks', [ArtworkController::class, 'store']);
    Route::get('artworks/{id}/edit', [ArtworkController::class, 'edit']);
    Route::put('artworks/{id}', [ArtworkController::class, 'update']);
    Route::delete('artworks/{id}', [ArtworkController::class, 'destroy']);


require __DIR__.'/auth.php';
