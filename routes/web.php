<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrekController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('frontend.home.homepage');
// })->name('index');


Route::get('/default', function () {
    return view('welcome');
})->name('default');

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
Route::get('/contact', [TrekController::class, 'contact'])->name('contact');

Route::get('/', [TrekController::class, 'index'])->name('index');

// Route::get('/blog', [TrekController::class, 'blog'])->name('blog');

// Route::get('/news',[TrekController::class,'news'])->name('news');

Route::get('/testimonials', [TrekController::class, 'testimonials'])->name('testimonials');

Route::get('/faq', [TrekController::class, 'faq'])->name('faq');


Route::get('/faq', [TrekController::class, 'faq'])->name('faq');

Route::get('/region', [TrekController::class, 'region'])->name('region');

Route::get('/trekinfo', [TrekController::class, 'trekinfo'])->name('trekinfo');

Route::get('/trek/main', [TrekController::class, 'trekmain'])->name('trekmain');

Route::get('customize', [TrekController::class, 'customize'])->name('customize');



// TrekCOntroller

//News Controller


Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'index')->name('news');
    Route::get('/addnews', 'create')->name('create');
    Route::post('/storenews', 'store')->name('savenews');
    Route::get('/editnews/{slug}', 'edit')->name('editnews');
    Route::put('/update/{slug}', 'update')->name('updatenews');
    Route::delete('/delete/{slug}', 'destroy')->name('deletenews');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blogs', 'index')->name('blogs.index');
    Route::get('/blogs/create', 'create')->name('blogs.create');
    Route::post('/blogs', 'store')->name('blogs.store');
    Route::get('/blogs/{slug}/edit', 'edit')->middleware('auth')->name('blogs.edit');
    Route::put('/blogs/{slug}/update', 'update')->name('blogs.update');
    Route::delete('/blogs/{id}/destroy', 'destroy')->name('blogs.destroy');
    Route::get('/blogs/{slug}/{id}/show', 'show')->name('blogs.show');
});


require __DIR__ . '/auth.php';
