<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrekController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;

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

// HomeCOntrolller

// HomeCOntrolller

// TrekController
Route::get('/contact',[TrekController::class,'contact'])->name('contact');

Route::post('/contact/send', [ContactController::class, 'submitContactForm'])->name('contact.send');


Route::get('/',[TrekController::class,'index'])->name('index');

Route::get('/blog',[TrekController::class,'blog'])->name('blog');

Route::get('/gallery',[TrekController::class,'gallery'])->name('gallery');

Route::get('/news',[TrekController::class,'news'])->name('news');

Route::get('/testimonials',[TrekController::class,'testimonials'])->name('testimonials');

// Route::get('/faq',[TrekController::class,'faq'])->name('faq');

Route::resource('faqs', FaqController::class);

// Route::get('/faq',[TrekController::class,'faq'])->name('faq');

Route::get('/region',[TrekController::class,'region'])->name('region');

Route::get('/trekinfo',[TrekController::class,'trekinfo'])->name('trekinfo');

Route::get('/trek/main',[TrekController::class,'trekmain'])->name('trekmain');

Route::get('customize',[TrekController::class,'customize'])->name('customize');



// TrekCOntroller




require __DIR__.'/auth.php';
