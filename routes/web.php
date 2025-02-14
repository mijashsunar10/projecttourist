    <?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomizeController;
use App\Http\Controllers\ExpeditionController;
use App\Http\Controllers\ExpeditionFactController;
use App\Http\Controllers\ExpeditionfaqController;
use App\Http\Controllers\ExpeditionHighlightController;
use App\Http\Controllers\ExpeditionImageController;
use App\Http\Controllers\ExpeditionInclusionExcluionController;
use App\Http\Controllers\ExpeditionItineraryController;
use App\Http\Controllers\ExpeditionRequiredItemController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InclusionExclusionController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\MountainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RequiredItemController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourFactController;
use App\Http\Controllers\TourfaqController;
use App\Http\Controllers\TourHighlightController;
use App\Http\Controllers\TourImageController;
use App\Http\Controllers\TourInclusionExclusionController;
use App\Http\Controllers\TourItineraryController;
use App\Http\Controllers\TourRequiredItemController;
use App\Http\Controllers\TourtripsController;
use App\Http\Controllers\TrekController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TripDescriptionController;
use App\Http\Controllers\TripFactController;
use App\Http\Controllers\TripfaqController;
use App\Http\Controllers\TripHighlightController;
use App\Models\ExpeditionInclusionExclusion;
use App\Models\TourHighlight;
use App\Models\TourRequiredItem;
use App\Models\Tourtrips;
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



Route::get('/region',[TrekController::class,'region'])->name('region');

Route::get('/trekinfo',[TrekController::class,'trekinfo'])->name('trekinfo');

Route::get('/trek/main',[TrekController::class,'trekmain'])->name('trekmain');
Route::get('/trek/main1',[TrekController::class,'trekmain1'])->name('trekmain1');





Route::get('/regions/create', [RegionController::class, 'regionscreate'])->name('regionscreate');

Route::post('/regionsstore', [RegionController::class, 'regionsstore'])->name('regionsstore');
// TrekCOntroller


Route::controller(RegionController::class)->group(function () {
    Route::get('/regions', 'index')->name('regionsindex'); // Public
    // Route::get('/header', 'header')->name('header'); // Public
    Route::get('/regions/{id}',  'regionshow')->name('regionsshow'); // Public

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/regions/create', 'regionscreate')->name('regionscreate');
        Route::post('/regionsstore', 'regionsstore')->name('regionsstore');
        Route::get('/regions/{id}/edit','regionsedit')->name('regionsedit');
        Route::post('/regions/{id}/update', 'regionsupdate')->name('regionsupdate');
        Route::post('/regions/{id}/delete',  'regionsdestroy')->name('regionsdestroy');
    });
});


// Route::get('/userregions', [RegionController::class, 'userindex'])->name('userregions');
// Route::get('/userregions/{id}', [RegionController::class,  'userregionshow'])->name('userregionsshow');


Route::controller(TripController::class)->group(function () {

    Route::get('/trips/{id}', 'tripShow')->name('tripshow');

    Route::middleware(['auth', 'verified'])->group(function () {

        Route::get('/regions/{region_id}/trips/create', 'tripscreate')->name('tripscreate');
        Route::post('/regions/{region_id}/trips',  'tripsstore')->name('tripsstore');
        Route::get('/trips/{id}/edit',  'tripsedit')->name('tripsedit');
        Route::put('/trips/{id}', 'tripsupdate')->name('tripsupdate');
        Route::delete('/trips/{id}',  'tripsdestroy')->name('tripsdestroy');
        });
    

});

    Route::controller(TripDescriptionController::class)->middleware(['auth', 'verified'])->group(function()
    {
     Route::post('/trips/{id}/add-images',  'addImages')->name('addtripimages');
    Route::post('/images/{id}/update',  'updateImage')->name('updateimage');
    Route::delete('/images/{id}/delete', 'deleteImage')->name('deleteimage');
    });

    Route::prefix('trips/{trip_id}/highlights')->controller(TripHighlightController::class)->group(function () {
        // Public route (no auth or verified required)
        Route::get('/', 'index')->name('tripHighlightsindex'); // This now redirects to trip show
        
        // Authenticated and verified routes
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/create', 'create')->name('tripHighlightscreate');
            Route::post('/', 'store')->name('tripHighlightsstore');
            Route::get('/edit', 'edit')->name('tripHighlightsedit');
            Route::post('/update', 'update')->name('tripHighlightsupdate');
            Route::delete('/delete', 'destroy')->name('tripHighlightsdestroy');
        });
    });
    
    

    Route::prefix('trips/{trip_id}/itinerary')->controller(ItineraryController::class)->middleware(['auth', 'verified'])->group(function () {
        Route::get('create', 'create')->name('itinerarycreate');
        Route::post('/', 'store')->name('itinerarystore');
        Route::get('{itinerary_id}/edit', 'edit')->name('itineraryedit');
        Route::post('{itinerary_id}/update', 'update')->name('itineraryupdate');
        Route::delete('delete', 'destroy')->name('itinerarydestroy');
    });
    


    Route::prefix('trips/{trip_id}/trip-facts')->controller(TripFactController::class)->middleware(['auth', 'verified'])->group(function () {
        Route::get('create', 'create')->name('tripfactcreate');
        Route::post('store', 'store')->name('tripfactstore');
        Route::get('{fact_id}/edit', 'edit')->name('tripfactedit');
        Route::post('{fact_id}/update', 'update')->name('tripfactupdate');
        Route::delete('{fact_id}', 'destroy')->name('tripfactdestroy');
    });
    
    
    Route::controller(NewsController::class)->group(function () {
        // Public routes
        Route::get('/news', 'index')->name('news');
        Route::get('/news/{slug}/{id}/show', 'show')->name('news.show');
    
        // Authenticated and verified routes
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/addnews', 'create')->name('createnews');
            Route::post('/storenews', 'store')->name('savenews');
            Route::get('/editnews/{slug}', 'edit')->name('editnews');
            Route::put('/update/{slug}', 'update')->name('updatenews');
            Route::delete('/delete/{slug}', 'destroy')->name('deletenews');
        });
    });
    

    Route::get('/contact',[TrekController::class,'contact'])->name('contact');
    Route::post('/contact/send', [ContactController::class, 'submitContactForm'])->name('contact.send');


    // Route::resource('/faqs', FaqController::class);
    Route::controller(FaqController::class)->group(function () {
        // Publicly accessible route
        Route::get('faqs', 'index')->name('faqs.index'); 
        
        // Authenticated and verified routes
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('faqs/create', 'create')->name('faqs.create');
            Route::post('faqs', 'store')->name('faqs.store');
            Route::get('faqs/{faq:slug}/edit', 'edit')->name('faqs.edit');
            Route::put('faqs/{faq:slug}', 'update')->name('faqs.update');
            Route::delete('faqs/{faq:slug}', 'destroy')->name('faqs.destroy');
        });
    });
    


    Route::get('/customize',[TrekController::class,'customize'])->name('customize');    
    Route::post('/customize/send', [CustomizeController::class, 'submitCustomizeForm'])->name('customize.send');


    Route::controller(BlogController::class)->group(function () {
        Route::get('/blogs', 'index')->name('blogs.index');
        Route::get('/blogs/{slug}/{id}/show', 'show')->name('blogs.show');

        Route::middleware(['auth','verified'])->group(function () {
        Route::get('/blogs/create', 'create')->name('blogs.create');
        Route::post('/blogs', 'store')->name('blogs.store');
        Route::get('/blogs/{slug}/edit', 'edit')->name('blogs.edit');
        Route::put('/blogs/{slug}/update', 'update')->name('blogs.update');
        Route::delete('/blogs/{id}/destroy', 'destroy')->name('blogs.destroy');
                
    });
    });  
    
    
    Route::resource('gallery', GalleryController::class);



    Route::middleware(['auth', 'verified'])->prefix('trip/{trip_id}/requireditems')->controller(RequiredItemController::class)->group(function () {
        Route::get('create', 'create')->name('requireditems.create');
        Route::post('store', 'store')->name('requireditems.store');
        Route::get('{id}/edit', 'edit')->name('requireditems.edit');
        Route::put('{id}/update', 'update')->name('requireditems.update');
        Route::delete('{id}/delete', 'destroy')->name('requireditems.destroy');
    });
    


Route::controller(TourController::class)->group(function () {
    // Public routes (no authentication required)
    Route::get('/tour', 'index')->name('tourindex'); // Public
  
    
    // Authenticated routes
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/tour/create', 'tourcreate')->name('tourcreate');
        Route::post('/tour', 'tourstore')->name('tourstore');
        Route::get('/tour/{id}/edit', 'touredit')->name('touredit');
        Route::post('/tour/{id}/update', 'tourupdate')->name('tourupdate');
        Route::post('/tour/{id}/delete', 'tourdestroy')->name('tourdestroy');
    });
    Route::get('/tour/{id}', 'tourshow')->name('tourshow');
});


Route::controller(TourtripsController::class)->group(function () {
    // Authenticated routes
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/tourtrips/{tour_id}/tourtrips/create', 'tourtripscreate')->name('tourtripscreate');
        Route::post('/tourtrips/{tour_id}/tourtrips', 'tourtripsstore')->name('tourtripsstore');
        Route::get('/tourtrips/{id}/edit', 'edit')->name('tourtripsedit');
        Route::put('/tourtrips/{id}', 'update')->name('tourtripsupdate');
        Route::delete('/tourtrips/{id}', 'tourtripdestroy')->name('tourtripdestroy');
    });

    // Public route (no authentication required)
    Route::get('/tourtrips/{id}', 'tourtripshow')->name('tourtripshow');
});


        // })
   ;

   Route::middleware(['auth', 'verified'])->controller(TourImageController::class)->group(function () {
    Route::post('/tourtrips/{id}/add-images', 'addImages')->name('addtourimages');
    Route::post('/tourimages/{id}/update', 'updateImage')->name('updatetourimage');
    Route::delete('/tourimages/{id}/delete', 'deleteImage')->name('deletetourimage');
});


Route::middleware(['auth','verified'])->prefix('tourtrips/{tourtrip_id}/tour-facts')->controller(TourFactController::class)->group(function () {
    Route::get('create', 'create')->name('tourfactcreate');
    Route::post('store', 'store')->name('tourfactstore');
    Route::get('{fact_id}/edit', 'edit')->name('tourfactedit');
    Route::post('{fact_id}/update', 'update')->name('tourfactupdate');
    Route::delete('{fact_id}', 'destroy')->name('tourfactdestroy');
});


// Public route (no authentication required)
Route::get('tourtrips/{tourtrip_id}/tourhighlights', [TourHighlightController::class, 'index'])->name('tourHighlightsindex');

// Authenticated routes
Route::middleware(['auth', 'verified'])->prefix('tourtrips/{tourtrip_id}/tourhighlights')->controller(TourHighlightController::class)->group(function () {
    Route::get('create', 'create')->name('tourHighlightscreate');
    Route::post('/', 'store')->name('tourHighlightsstore');
    Route::get('edit', 'edit')->name('tourHighlightsedit');
    Route::post('update', 'update')->name('tourHighlightsupdate');
    Route::delete('delete', 'destroy')->name('tourHighlightsdestroy');
});




Route::middleware(['auth', 'verified'])->prefix('tourtrips/{trip_id}/itinerary')->controller(TourItineraryController::class)->group(function () {
    Route::get('/create', 'create')->name('touritinerarycreate');
    Route::post('/', 'store')->name('touritinerarystore');
    Route::get('/{itinerary_id}/edit', 'edit')->name('touritineraryedit');
    Route::post('/{itinerary_id}/update', 'update')->name('touritineraryupdate');
    Route::delete('/delete', 'destroy')->name('touritinerarydestroy');
});


Route::middleware(['auth', 'verified'])->prefix('trips/{trip}/inclusions-exclusions')->controller(InclusionExclusionController::class)->group(function () {
    // Show Create Form for Inclusions & Exclusions
    Route::get('create', 'create')->name('trips.inclusions-exclusions.create');
    
    // Store Inclusions & Exclusions
    Route::post('/', 'store')->name('trips.inclusions-exclusions.store');
    
    // Edit Inclusion/Exclusion
    Route::get('{inclusionExclusion}/edit', 'edit')->name('trips.inclusions-exclusions.edit');
    
    // Update Inclusion/Exclusion
    Route::put('{inclusionExclusion}', 'update')->name('trips.inclusions-exclusions.update');
    
    // Delete Inclusion/Exclusion
    Route::delete('{inclusionExclusion}', 'destroy')->name('trips.inclusions-exclusions.destroy');
});


Route::middleware(['auth', 'verified'])->prefix('trips/{trip_id}/tripfaq')->controller(TripfaqController::class)->group(function () {
    Route::get('/create', 'create')->name('tripfaqcreate');
    Route::post('/', 'store')->name('tripfaqstore');
    Route::get('/{tripfaq_id}/edit', 'edit')->name('tripfaqedit');
    Route::post('/{tripfaq_id}/update', 'update')->name('tripfaqupdate');
    Route::delete('/delete', 'destroy')->name('tripfaqdestroy');
});



Route::middleware(['auth', 'verified'])->prefix('tourtrip/{tourtrip_id}/tourrequireditems')->controller(TourRequiredItemController::class)->group(function () {
    Route::get('create', 'create')->name('tourrequireditemscreate');
    Route::post('store', 'store')->name('tourrequireditemsstore');
    Route::get('{id}/edit', 'edit')->name('tourrequireditemsedit');
    Route::put('{id}/update', 'update')->name('tourrequireditemsupdate');
    Route::delete('{id}/delete', 'destroy')->name('tourrequireditemsdestroy');
});


Route::middleware(['auth', 'verified'])->prefix('tourtrips/{tourtrip}/tourinclusions-exclusions')->controller(TourInclusionExclusionController::class)->group(function () {
    // Show Create Form for Inclusions & Exclusions
    Route::get('create', 'create')->name('tourtrips.inclusions-exclusions.create');
    
    // Store Inclusions & Exclusions
    Route::post('/', 'store')->name('tourtrips.inclusions-exclusions.store');
    
    // Edit Inclusion/Exclusion
    Route::get('{inclusionExclusion}/edit', 'edit')->name('tourtrips.inclusions-exclusions.edit');
    
    // Update Inclusion/Exclusion
    Route::put('{inclusionExclusion}', 'update')->name('tourtrips.inclusions-exclusions.update');
    
    // Delete Inclusion/Exclusion
    Route::delete('{inclusionExclusion}', 'destroy')->name('tourtrips.inclusions-exclusions.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('tourtrips/{tourtrip_id}/tourfaq')->controller(TourfaqController::class)->group(function () {
    Route::get('create', 'create')->name('tourfaqcreate');
    Route::post('/', 'store')->name('tourfaqstore');
    Route::get('{tourfaq_id}/edit', 'edit')->name('tourfaqedit');
    Route::post('{tourfaq_id}/update', 'update')->name('tourfaqupdate');
    Route::delete('delete', 'destroy')->name('tourfaqdestroy');
});



Route::controller(ExpeditionController::class)->group(function () {
    Route::get('/expeditions', 'index')->name('expeditionsindex'); // Public
    // Route::get('/header', 'header')->name('header'); // Public
    

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('expeditions/create', 'expeditionscreate')->name('expeditionscreate');
        Route::post('/expeditionsstore', 'expeditionsstore')->name('expeditionsstore');
        Route::get('/expeditions/{id}/edit','expeditionsedit')->name('expeditionsedit');
        Route::post('/expeditions/{id}/update', 'expeditionsupdate')->name('expeditionsupdate');
        Route::post('/expeditions/{id}/delete',  'expeditionsdestroy')->name('expeditionsdestroy');
    });
    
    Route::get('/expeditions/{id}',  'expeditionshow')->name('expeditionsshow'); // Public
});


Route::controller(MountainController::class)->group(function () {

   
    Route::middleware(['auth', 'verified'])->group(function () {

        Route::get('/expeditions/{expedition_id}/mountains/create', 'mountainscreate')->name('mountainscreate');
        Route::post('/expeditions/{expedition_id}/mountains',  'mountainsstore')->name('mountainsstore');
        Route::get('/mountains/{id}/edit',  'mountainsedit')->name('mountainsedit');
        Route::put('/mountains/{id}', 'mountainsupdate')->name('mountainsupdate');
        Route::delete('/mountains/{id}',  'mountainsdestroy')->name('mountainsdestroy');
        });

        Route::get('/mountains/{id}', 'mountainShow')->name('mountainshow');
  

});


Route::controller(ExpeditionImageController::class)->middleware(['auth', 'verified'])->group(function()
{
 Route::post('/mountains/{id}/add-images',  'addImages')->name('addmountainimages');
Route::post('/images/{id}/update',  'updateImage')->name('updateimage');
Route::delete('/images/{id}/delete', 'deleteImage')->name('deleteimage');
});


Route::prefix('mountains/{mountain_id}/mountain-facts')->controller(ExpeditionFactController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('create', 'create')->name('mountainfactcreate');
    Route::post('store', 'store')->name('mountainfactstore');
    Route::get('{fact_id}/edit', 'edit')->name('mountainfactedit');
    Route::post('{fact_id}/update', 'update')->name('mountainfactupdate');
    Route::delete('{fact_id}', 'destroy')->name('mountainfactdestroy');
});

Route::get('mountains/{mountain_id}/mountainhighlights', [ExpeditionHighlightController::class, 'index'])->name('mountainHighlightsindex');

// Authenticated routes
Route::middleware(['auth', 'verified'])->prefix('mountains/{mountain_id}/mountainhighlights')->controller(ExpeditionHighlightController::class)->group(function () {
    Route::get('create', 'create')->name('mountainHighlightscreate');
    Route::post('/', 'store')->name('mountainHighlightsstore');
    Route::get('edit', 'edit')->name('mountainHighlightsedit');
    Route::post('update', 'update')->name('mountainHighlightsupdate');
    Route::delete('delete', 'destroy')->name('mountainHighlightsdestroy');
});

Route::middleware(['auth', 'verified'])->prefix('mountains/{mountain_id}/itinerary')->controller(ExpeditionItineraryController::class)->group(function () {
    Route::get('/create', 'create')->name('mountainitinerarycreate');
    Route::post('/', 'store')->name('mountainitinerarystore');
    Route::get('/{itinerary_id}/edit', 'edit')->name('mountainitineraryedit');
    Route::post('/{itinerary_id}/update', 'update')->name('mountainitineraryupdate');
    Route::delete('/delete', 'destroy')->name('mountainitinerarydestroy');
});



Route::middleware(['auth', 'verified'])->prefix('mountains/{mountain}/mountaininclusions-exclusions')->controller(ExpeditionInclusionExcluionController::class)->group(function () {
    // Show Create Form for Inclusions & Exclusions
    Route::get('create', 'create')->name('mountains.inclusions-exclusions.create');
    
    // Store Inclusions & Exclusions
    Route::post('/', 'store')->name('mountains.inclusions-exclusions.store');
    
    // Edit Inclusion/Exclusion
    Route::get('{inclusionExclusion}/edit', 'edit')->name('mountains.inclusions-exclusions.edit');
    
    // Update Inclusion/Exclusion
    Route::put('{inclusionExclusion}', 'update')->name('mountains.inclusions-exclusions.update');
    
    // Delete Inclusion/Exclusion
    Route::delete('{inclusionExclusion}', 'destroy')->name('mountains.inclusions-exclusions.destroy');
});


Route::middleware(['auth', 'verified'])->prefix('mountain/{mountain_id}/mountainrequireditems')->controller(ExpeditionRequiredItemController::class)->group(function () {
    Route::get('create', 'create')->name('mountainrequireditemscreate');
    Route::post('store', 'store')->name('mountainrequireditemsstore');
    Route::get('{id}/edit', 'edit')->name('mountainrequireditemsedit');
    Route::put('{id}/update', 'update')->name('mountainrequireditemsupdate');
    Route::delete('{id}/delete', 'destroy')->name('mountainrequireditemsdestroy');
});


Route::middleware(['auth', 'verified'])->prefix('mountains/{mountain_id}/mountainfaq')->controller(ExpeditionfaqController::class)->group(function () {
    Route::get('create', 'create')->name('mountainfaqcreate');
    Route::post('/', 'store')->name('mountainfaqstore');
    Route::get('{mountainfaq_id}/edit', 'edit')->name('mountainfaqedit');
    Route::post('{mountainfaq_id}/update', 'update')->name('mountainfaqupdate');
    Route::delete('delete', 'destroy')->name('mountainfaqdestroy');
});





require __DIR__.'/auth.php';
