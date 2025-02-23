<?php
namespace App\Http\Controllers;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Models\Trip;

class EnquiryController extends Controller
{
    public function submitEnquiryForm(Request $request, $trip_id)
    {
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'country' => 'nullable|string',
            'message' => 'nullable|string',
        ]);
        
        $validatedData['trip_id'] = $trip_id;
        
        Enquiry::create($validatedData);
        
        return redirect()->route('tripshow', $trip_id)->with('success', 'Your enquiry has been submitted successfully!');
    }
    
    public function index($trip_id)
    {   
        $trip = Trip::find($trip_id);
        if (!$trip) {
            abort(404, 'Trip not found');
        }
        $enquiries = Enquiry::where('trip_id', $trip_id)->get();
        
        return view('frontend.enquiry.enquiry', compact('enquiries', 'trip'));
    }
}
