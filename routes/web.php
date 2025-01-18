<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrekController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.home.homepage');
// })->name('index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/new', function () {
    return view('frontend.home.new');
});
Route::get('/new2', function () {
    return view('frontend.home.new2');
});

Route::get('/contact',[TrekController::class,'contact'])->name('contact');

Route::get('/',[TrekController::class,'index'])->name('index');
require __DIR__.'/auth.php';
