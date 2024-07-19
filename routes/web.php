<?php

use App\Http\Controllers\FrontendContoller;
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
Route::get('/flyeast', [FrontendContoller::class, 'flyeast'])->name('flyeast');
Route::get('/scholarship', [FrontendContoller::class, 'scholarship'])->name('scholarship');
Route::get('/blogs', [FrontendContoller::class, 'blogs'])->name('blogs');
// Route::get('/header', [FrontendContoller::class,'header'])->name('header');
Route::get('/success', [FrontendContoller::class, 'success_story'])->name('success.story');


require __DIR__ . '/auth.php';
