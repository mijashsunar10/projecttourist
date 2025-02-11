    <?php

    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\ContactController;
    use App\Http\Controllers\CustomizeController;
    use App\Http\Controllers\FaqController;
    use App\Http\Controllers\GalleryController;
    use App\Http\Controllers\InclusionExclusionController;
    use App\Http\Controllers\ItineraryController;
    use App\Http\Controllers\NewsController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\RegionController;
    use App\Http\Controllers\RequiredItemController;
    use App\Http\Controllers\TrekController;
    use App\Http\Controllers\TripController;
    use App\Http\Controllers\TripDescriptionController;
    use App\Http\Controllers\TripFactController;
    use App\Http\Controllers\TripfaqController;
    use App\Http\Controllers\TripHighlightController;
    use App\Models\InclusionExclusion;
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

    Route::get('/admindashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('admindashboard');

    Route::get('/new', function () {
        return view('frontend.home.new');
    });
    Route::get('/new2', function () {
        return view('frontend.home.new2');
    });

    // HomeCOntrolller

    // HomeCOntrolller

    // TrekController


    Route::get('/', [TrekController::class, 'index'])->name('index');

    Route::get('/blog', [TrekController::class, 'blog'])->name('blog');

    // Route::get('/news',[TrekController::class,'news'])->name('news');

    Route::get('/testimonials', [TrekController::class, 'testimonials'])->name('testimonials');

    Route::get('/faq', [TrekController::class, 'faq'])->name('faq');


    Route::get('/faq', [TrekController::class, 'faq'])->name('faq');

    Route::get('/region', [TrekController::class, 'region'])->name('region');

    Route::get('/trekinfo', [TrekController::class, 'trekinfo'])->name('trekinfo');

    Route::get('/trek/main', [TrekController::class, 'trekmain'])->name('trekmain');
    Route::get('/trek/main1', [TrekController::class, 'trekmain1'])->name('trekmain1');


    Route::get('/gallerys', [TrekController::class, 'gallery'])->name('gallerys');




    Route::get('/regions/create', [RegionController::class, 'regionscreate'])->name('regionscreate');

    Route::post('/regionsstore', [RegionController::class, 'regionsstore'])->name('regionsstore');
    // TrekCOntroller

    // Route::controller(RegionController::class)->group(function () {
    //     Route::get('/regions', 'index')->middleware(['auth', 'verified'])->name('regionsindex');
    //     Route::get('/regions/create', 'regionscreate')->middleware(['auth', 'verified'])->name('regionscreate');
    //     Route::post('/regionsstore', 'regionsstore')->middleware(['auth', 'verified'])->name('regionsstore');
    //     Route::get('/regions/{id}/edit','regionsedit')->middleware(['auth', 'verified'])->name('regionsedit');
    //     Route::post('/regions/{id}/update', 'regionsupdate')->middleware(['auth', 'verified'])->name('regionsupdate');
    //     Route::post('/regions/{id}/delete',  'regionsdestroy')->middleware(['auth', 'verified'])->name('regionsdestroy');

    //     Route::get('/regions/{id}',  'regionshow')->middleware(['auth', 'verified'])->name('regionsshow');
    //     // Route::get('/editnews/{slug}', 'edit')->name('editnews');

    // });

    Route::controller(RegionController::class)->group(function () {
        Route::get('/regions', 'index')->name('regionsindex'); // Public
        // Route::get('/header', 'header')->name('header'); // Public
        Route::get('/regions/{id}',  'regionshow')->name('regionsshow'); // Public

        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/regions/create', 'regionscreate')->name('regionscreate');
            Route::post('/regionsstore', 'regionsstore')->name('regionsstore');
            Route::get('/regions/{id}/edit', 'regionsedit')->name('regionsedit');
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

    Route::controller(TripDescriptionController::class)->middleware(['auth', 'verified'])->group(function () {

        Route::post('/trips/{id}/add-images',  'addImages')->name('addtripimages');
        Route::post('/images/{id}/update',  'updateImage')->name('updateimage');
        Route::delete('/images/{id}/delete', 'deleteImage')->name('deleteimage');
    });

    Route::prefix('trips/{trip_id}/highlights')->group(function () {
        Route::get('/', [TripHighlightController::class, 'index'])->name('tripHighlightsindex'); // This now redirects to trip show
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
    Route::prefix('trips/{trip_id}/tripfaq')->group(function () {
        Route::get('/create', [TripfaqController::class, 'create'])->name('tripfaqcreate');
        Route::post('/', [TripfaqController::class, 'store'])->name('tripfaqstore');
        Route::get('/{tripfaq_id}/edit', [TripfaqController::class, 'edit'])->name('tripfaqedit');
        Route::post('/{tripfaq_id}/update', [TripfaqController::class, 'update'])->name('tripfaqupdate');
        Route::delete('/delete', [TripfaqController::class, 'destroy'])->name('tripfaqdestroy');
    });


    Route::get('trips/{trip_id}/trip-facts/create', [TripFactController::class, 'create'])->name('tripfactcreate');
    Route::post('trips/{trip_id}/trip-facts/store', [TripFactController::class, 'store'])->name('tripfactstore');
    Route::get('trips/{trip_id}/trip-facts/{fact_id}/edit', [TripFactController::class, 'edit'])->name('tripfactedit');
    Route::post('trips/{trip_id}/trip-facts/{fact_id}/update', [TripFactController::class, 'update'])->name('tripfactupdate');
    Route::delete('trips/{trip_id}/trip-facts/{fact_id}', [TripFactController::class, 'destroy'])->name('tripfactdestroy');

    Route::controller(NewsController::class)->group(function () {
        Route::get('/news', 'index')->name('news');
        Route::get('/addnews', 'create')->name('createnews');
        Route::post('/storenews', 'store')->name('savenews');
        Route::get('/editnews/{slug}', 'edit')->name('editnews');
        Route::put('/update/{slug}', 'update')->name('updatenews');
        Route::delete('/delete/{slug}', 'destroy')->name('deletenews');
    });

    Route::get('/contact', [TrekController::class, 'contact'])->name('contact');
    Route::post('/contact/send', [ContactController::class, 'submitContactForm'])->name('contact.send');


    // Route::resource('/faqs', FaqController::class);
    Route::get('faqs', [FaqController::class, 'index'])->name('faqs.index'); // Publicly accessible
    Route::middleware(['auth'])->group(function () {

        Route::get('faqs/create', [FaqController::class, 'create'])->name('faqs.create');
        Route::post('faqs', [FaqController::class, 'store'])->name('faqs.store');
        Route::get('faqs/{faq:slug}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
        Route::put('faqs/{faq:slug}', [FaqController::class, 'update'])->name('faqs.update');
        Route::delete('faqs/{faq:slug}', [FaqController::class, 'destroy'])->name('faqs.destroy');
    });


    Route::get('/customize', [TrekController::class, 'customize'])->name('customize');
    Route::post('/customize/send', [CustomizeController::class, 'submitCustomizeForm'])->name('customize.send');


    Route::controller(BlogController::class)->group(function () {
        Route::get('/blogs', 'index')->name('blogs.index');
        Route::get('/blogs/create', 'create')->name('blogs.create');
        Route::post('/blogs', 'store')->name('blogs.store');
        Route::get('/blogs/{slug}/edit', 'edit')->name('blogs.edit');
        Route::put('/blogs/{slug}/update', 'update')->name('blogs.update');
        Route::delete('/blogs/{id}/destroy', 'destroy')->name('blogs.destroy');
        Route::get('/blogs/{slug}/{id}/show', 'show')->name('blogs.show');
    });

    Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');

    Route::middleware(['auth'])->group(function () {
        Route::resource('gallery', GalleryController::class)->except(['index']);
    });


    Route::get('/trip/{trip_id}/requireditems/create', [RequiredItemController::class, 'create'])->name('requireditems.create');
    Route::post('/trip/{trip_id}/requireditems/store', [RequiredItemController::class, 'store'])->name('requireditems.store');
    Route::get('/trip/{trip_id}/requireditems/{id}/edit', [RequiredItemController::class, 'edit'])->name('requireditems.edit');
    Route::put('/trip/{trip_id}/requireditems/{id}/update', [RequiredItemController::class, 'update'])->name('requireditems.update');
    Route::delete('/trip/{trip_id}/requireditems/{id}/delete', [RequiredItemController::class, 'destroy'])->name('requireditems.destroy');


    // Show Create Form for Inclusions & Exclusions
    Route::get('trips/{trip}/inclusions-exclusions/create', [InclusionExclusionController::class, 'create'])->name('trips.inclusions-exclusions.create');

    // Store Inclusions & Exclusions
    Route::post('trips/{trip}/inclusions-exclusions', [InclusionExclusionController::class, 'store'])->name('trips.inclusions-exclusions.store');

    // Edit Inclusion/Exclusion
    Route::get('trips/{trip}/inclusions-exclusions/{inclusionExclusion}/edit', [InclusionExclusionController::class, 'edit'])->name('trips.inclusions-exclusions.edit');

    // Update Inclusion/Exclusion
    Route::put('trips/{trip}/inclusions-exclusions/{inclusionExclusion}', [InclusionExclusionController::class, 'update'])->name('trips.inclusions-exclusions.update');

    // Delete Inclusion/Exclusion
    Route::delete('trips/{trip}/inclusions-exclusions/{inclusionExclusion}', [InclusionExclusionController::class, 'destroy'])->name('trips.inclusions-exclusions.destroy');




    require __DIR__ . '/auth.php';
