<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ControllerPrincipal;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerPrincipal::class, 'home'])->name('home');
Route::get('/Contato', [ControllerPrincipal::class, 'contato'])->name('contato');

Route::get('/welcome', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
