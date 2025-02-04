    <?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomizeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TrekController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TripDescriptionController;
use App\Http\Controllers\TripHighlightController;
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

Route::get('/admindashboard',[AdminController::class,'dashboard'])->middleware(['auth', 'verified'])->name('admindashboard');

Route::get('/new', function () {
    return view('frontend.home.new');
});
Route::get('/new2', function () {
    return view('frontend.home.new2');
});

// HomeCOntrolller

// HomeCOntrolller

// TrekController


Route::get('/',[TrekController::class,'index'])->name('index');

Route::get('/blog',[TrekController::class,'blog'])->name('blog');

// Route::get('/news',[TrekController::class,'news'])->name('news');

Route::get('/testimonials',[TrekController::class,'testimonials'])->name('testimonials');

Route::get('/faq',[TrekController::class,'faq'])->name('faq');


Route::get('/faq',[TrekController::class,'faq'])->name('faq');

Route::get('/region',[TrekController::class,'region'])->name('region');

Route::get('/trekinfo',[TrekController::class,'trekinfo'])->name('trekinfo');

Route::get('/trek/main',[TrekController::class,'trekmain'])->name('trekmain');


Route::get('/gallery',[TrekController::class,'gallery'])->name('gallery');




Route::get('/regions/create', [RegionController::class, 'regionscreate'])->name('regionscreate');

Route::post('/regionsstore', [RegionController::class, 'regionsstore'])->name('regionsstore');
// TrekCOntroller

Route::controller(RegionController::class)->group(function () {
    Route::get('/regions', 'index')->middleware(['auth', 'verified'])->name('regionsindex');
    Route::get('/regions/create', 'regionscreate')->middleware(['auth', 'verified'])->name('regionscreate');
    Route::post('/regionsstore', 'regionsstore')->middleware(['auth', 'verified'])->name('regionsstore');
    Route::get('/regions/{id}/edit','regionsedit')->middleware(['auth', 'verified'])->name('regionsedit');
    Route::post('/regions/{id}/update', 'regionsupdate')->middleware(['auth', 'verified'])->name('regionsupdate');
    Route::post('/regions/{id}/delete',  'regionsdestroy')->middleware(['auth', 'verified'])->name('regionsdestroy');

    Route::get('/regions/{id}',  'regionshow')->middleware(['auth', 'verified'])->name('regionsshow');
    // Route::get('/editnews/{slug}', 'edit')->name('editnews');
   
});

Route::get('/userregions', [RegionController::class, 'userindex'])->name('userregions');
Route::get('/userregions/{id}', [RegionController::class,  'userregionshow'])->name('userregionsshow');
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

    Route::prefix('trips/{trip_id}/highlights')->group(function () {
        Route::get('/create', [TripHighlightController::class, 'create'])->name('tripHighlightscreate');
        Route::post('/', [TripHighlightController::class, 'store'])->name('tripHighlightsstore');
        Route::get('/edit', [TripHighlightController::class, 'edit'])->name('tripHighlightsedit');
        Route::post('/update', [TripHighlightController::class, 'update'])->name('tripHighlightsupdate');
        Route::delete('/delete', [TripHighlightController::class, 'destroy'])->name('tripHighlightsdestroy');

    });

    Route::prefix('trips/{trip_id}/itinerary')->group(function () {
        Route::get('/create', [ItineraryController::class, 'create'])->name('itinerarycreate');
        Route::post('/', [ItineraryController::class, 'store'])->name('itinerarystore');
        Route::get('/{itinerary_id}/edit', [ItineraryController::class, 'edit'])->name('itineraryedit');
        Route::post('/{itinerary_id}/update', [ItineraryController::class, 'update'])->name('itineraryupdate');
        Route::delete('/delete', [ItineraryController::class, 'destroy'])->name('itinerarydestroy');
    });
    
    Route::controller(NewsController::class)->group(function () {
        Route::get('/news', 'index')->name('news');
        Route::get('/addnews', 'create')->name('createnews');
        Route::post('/storenews', 'store')->name('savenews');
        Route::get('/editnews/{slug}', 'edit')->name('editnews');
        Route::put('/update/{slug}', 'update')->name('updatenews');
        Route::delete('/delete/{slug}', 'destroy')->name('deletenews');
    });

    Route::get('/contact',[TrekController::class,'contact'])->name('contact');
    Route::post('/contact/send', [ContactController::class, 'submitContactForm'])->name('contact.send');


    Route::resource('/faqs', FaqController::class);
    


    Route::get('/customize',[TrekController::class,'customize'])->name('customize');    
    Route::post('/contact/send', [CustomizeController::class, 'submitCustomizeForm'])->name('customize.send');


    Route::controller(BlogController::class)->group(function () {
        Route::get('/blogs', 'index')->name('blogs.index');
        Route::get('/blogs/create', 'create')->name('blogs.create');
        Route::post('/blogs', 'store')->name('blogs.store');
        Route::get('/blogs/{slug}/edit', 'edit')->name('blogs.edit');
        Route::put('/blogs/{slug}/update', 'update')->name('blogs.update');
        Route::delete('/blogs/{id}/destroy', 'destroy')->name('blogs.destroy');
        Route::get('/blogs/{slug}/{id}/show', 'show')->name('blogs.show');
    });    


require __DIR__.'/auth.php';
