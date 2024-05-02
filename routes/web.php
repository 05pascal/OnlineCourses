<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/a-propos', [HomeController::class, 'about'])->name('about');
Route::get('/formations', [HomeController::class, 'courses'])->name('courses');
Route::get('/tech-room', [HomeController::class, 'tech_room'])->name('tech_room');
Route::get('/devenir-formateur', [HomeController::class, 'teachers'])->name('teachers');
Route::get('/contacter', [HomeController::class, 'contact'])->name('contact');

// Auth Route
Route::get('/connexion', [AuthenticatedSessionController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
