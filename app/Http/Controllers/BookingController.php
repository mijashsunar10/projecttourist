<?php
namespace App\Http\Controllers;
use App\Mail\BookingFormMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Trip;
class BookingController extends Controller
{
     /**
     * Handle the contact form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submitBookingForm(Request $request, $trip_id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:20',
            'country' => 'required|string',
            'passport_no' => 'required|string',
            'date' => 'required|date',
            'people' => 'required|integer|min:1',
            'message' => 'nullable|string',
        ]);
    
        $validatedData['trip_id'] = $trip_id;
    
        // Save booking to the database
        Booking::create($validatedData);
    
        // Send an email notification
        Mail::to('sunaranamol@gmail.com')->send(new BookingFormMail($validatedData));
    
        // Redirect back to the trip show page with a success message
        return redirect()->route('tripshow', $trip_id)->with('success', 'Your booking has been submitted successfully!');
    }    public function index($trip_id)

    {   
    $trip = Trip::find($trip_id);
    if (!$trip) {
        abort(404, 'Trip not found');
    }
    $bookings = Booking::where('trip_id', $trip_id)->get();
    
    return view('frontend.booking.booking', compact('bookings', 'trip'));
    }
   
}