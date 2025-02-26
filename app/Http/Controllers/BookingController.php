<?php
// namespace App\Http\Controllers;
// use App\Mail\BookingFormMail;
// use App\Models\Booking;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
// use App\Models\Trip;
// class BookingController extends Controller
// {
//      /**
//      * Handle the contact form submission.
//      *
//      * @param \Illuminate\Http\Request $request
//      * @return \Illuminate\Http\JsonResponse
//      */
//     public function submitBookingForm(Request $request, $trip_id)
//     {
//         // Validate the form data
//         $validatedData = $request->validate([
//             'name'    => 'required|string|max:255',
//             'email'   => 'required|email|max:255',
//             'phone'   => 'required|string|max:20',
//             'country' => 'required|string',
//             'passport_no' => 'required|string',
//             'date' => 'required|date',
//             'people' => 'required|integer|min:1',
//             'message' => 'nullable|string',
//         ]);
    
//         $validatedData['trip_id'] = $trip_id;
    
//         // Save booking to the database
//         Booking::create($validatedData);
    
//         // Send an email notification
//         Mail::to('sunaranamol@gmail.com')->send(new BookingFormMail($validatedData));
    
//         // Redirect back to the trip show page with a success message
//         return redirect()->route('tripshow', $trip_id)->with('success', 'Your booking has been submitted successfully!');
//     }    public function index($trip_id)

//     {   
//     $trip = Trip::find($trip_id);
//     if (!$trip) {
//         abort(404, 'Trip not found');
//     }
//     $bookings = Booking::where('trip_id', $trip_id)->get();
    
//     return view('frontend.booking.booking', compact('bookings', 'trip'));
//     }
   
// }




namespace App\Http\Controllers;

use App\Mail\BookingFormMail;
use App\Models\Booking;
use App\Models\Trip;
use App\Models\TourTrip;
use App\Models\Mountain;
use App\Models\Tourtrips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Display the booking form.
     *
     * @param string $entity_type
     * @param int $entity_id
     * @return \Illuminate\View\View
     */
    public function index($entity_type, $entity_id)
    {
        // Fetch the entity based on the type
        switch ($entity_type) {
            case 'trip':
                $entity = Trip::findOrFail($entity_id);
                break;
            case 'tourtrip':
                $entity = Tourtrips::findOrFail($entity_id);
                break;
            case 'mountain':
                $entity = Mountain::findOrFail($entity_id);
                break;
            default:
                abort(404, 'Entity not found');
        }

        // Fetch bookings for the entity
        $bookings = Booking::where('entity_type', $entity_type)
                           ->where('entity_id', $entity_id)
                           ->get();

        return view('frontend.booking.booking', compact('bookings', 'entity', 'entity_type'));
    }

    /**
     * Handle the booking form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $entity_type
     * @param int $entity_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitBookingForm(Request $request, $entity_type, $entity_id)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name'        => 'required|string|max:255',
        'email'      => 'required|email|max:255',
        'phone'      => 'required|string|max:20',
        'country'    => 'required|string',
        'passport_no' => 'required|string',
        'date'        => 'required|date',
        'people'      => 'required|integer|min:1',
        'message'     => 'nullable|string',
    ]);

    // Add entity type and ID to the validated data
    $validatedData['entity_type'] = $entity_type;
    $validatedData['entity_id'] = $entity_id;

    // Save booking to the database
    Booking::create($validatedData);

    // Send an email notification
    Mail::to('sunaranamol@gmail.com')->send(new BookingFormMail($validatedData));

    
    // Determine the redirect route based on the entity type
    switch ($entity_type) {
        case 'trip':
            $redirectRoute = 'tripshow';
            break;
        case 'tourtrip':
            $redirectRoute = 'tourtripshow';
            break;
        case 'mountain':
            $redirectRoute = 'mountainshow';
            break;
        default:
            abort(404, 'Invalid entity type');
    }

    // Redirect back to the appropriate show page with a success message
    return redirect()->route($redirectRoute, $entity_id)
                     ->with('success', 'Your booking has been submitted successfully!');
}
}
    