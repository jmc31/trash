<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BookNow;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route
Route::get('/dashboard', [BookingController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Booking Routes
Route::get('/book-now', BookNow::class)->name('book-now');
Route::post('/book-now', [BookingController::class, 'store'])->name('book.now');

//edit and delete
Route::get('/bookings/{id}/edit', [BookingController::class, 'edit'])->name('edit.booking');
Route::delete('/bookings/{id}', [BookingController::class, 'destroy'])->name('delete.booking');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
