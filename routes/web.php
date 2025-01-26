    <?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TrekController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TripDescriptionController;
use App\Models\TripDescription;
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

// HomeCOntrolller

// HomeCOntrolller

// TrekController
Route::get('/contact',[TrekController::class,'contact'])->name('contact');

Route::get('/',[TrekController::class,'index'])->name('index');

Route::get('/blog',[TrekController::class,'blog'])->name('blog');

Route::get('/news',[TrekController::class,'news'])->name('news');

Route::get('/testimonials',[TrekController::class,'testimonials'])->name('testimonials');

Route::get('/faq',[TrekController::class,'faq'])->name('faq');


Route::get('/faq',[TrekController::class,'faq'])->name('faq');

Route::get('/region',[TrekController::class,'region'])->name('region');

Route::get('/trekinfo',[TrekController::class,'trekinfo'])->name('trekinfo');

Route::get('/trek/main',[TrekController::class,'trekmain'])->name('trekmain');

Route::get('/customize',[TrekController::class,'customize'])->name('customize');

Route::get('/gallery',[TrekController::class,'gallery'])->name('gallery');


Route::get('/regions', [RegionController::class, 'index'])->name('regionsindex');

Route::get('/regions/create', [RegionController::class, 'regionscreate'])->name('regionscreate');

Route::post('/regionsstore', [RegionController::class, 'regionsstore'])->name('regionsstore');
// TrekCOntroller

Route::controller(RegionController::class)->group(function () {
    Route::get('/regions', 'index')->name('regionsindex');
    Route::get('/regions/create', 'regionscreate')->name('regionscreate');
    Route::post('/regionsstore', 'regionsstore')->name('regionsstore');
    Route::get('/regions/{id}/edit','regionsedit')->name('regionsedit');
    Route::post('/regions/{id}/update', 'regionsupdate')->name('regionsupdate');
    Route::post('/regions/{id}/delete',  'regionsdestroy')->name('regionsdestroy');

    Route::get('/regions/{id}',  'regionshow')->name('regionsshow');
    // Route::get('/editnews/{slug}', 'edit')->name('editnews');
   
});

Route::controller(TripController::class)->group(function () {
    Route::get('/regions/{region_id}/trips/create', 'tripscreate')->name('tripscreate');
    Route::post('/regions/{region_id}/trips',  'tripsstore')->name('tripsstore');
    Route::get('/trips/{id}/edit',  'tripsedit')->name('tripsedit');
    Route::put('/trips/{id}', 'tripsupdate')->name('tripsupdate');
    Route::delete('/trips/{id}',  'tripsdestroy')->name('tripsdestroy');
    Route::get('/trips/{id}', 'tripShow')->name('tripshow');

});

    Route::controller(TripDescriptionController::class)->group(function()
    {

     Route::post('/trips/{id}/add-images',  'addImages')->name('addtripimages');
    Route::post('/images/{id}/update',  'updateImage')->name('updateimage');
    Route::delete('/images/{id}/delete', 'deleteImage')->name('deleteimage');
    });










require __DIR__.'/auth.php';
