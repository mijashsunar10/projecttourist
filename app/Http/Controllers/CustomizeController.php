<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CustomizeFormMail;
use Illuminate\Support\Facades\Mail;

class CustomizeController extends Controller
{
    public function submitCustomizeForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',  // Required field
            'email' => 'required|email',         // Required field
            'country' => 'required|string',      // Required field
            'phone' => 'nullable|string',        // Nullable
            'trek_name' => 'nullable|string',    // Nullable
            'region' => 'nullable|string',       // Nullable
            'no_of_people' => 'nullable|integer',// Nullable
            'budget' => 'nullable|string',       // Nullable
            'travel_date' => 'nullable|date',    // Nullable
            'duration' => 'nullable|integer',    // Nullable
            'hotel_accommodation' => 'nullable|string', // Nullable
            'guide_porter' => 'nullable|string', // Nullable
            'message' => 'nullable|string',      // Nullable
        ]);
                

        // Send email
        Mail::to('sandeshpahari05@gmail.com')->send(new CustomizeFormMail($validatedData));

        return response()->json(['message' => 'Your message has been sent successfully!']);
    }
}

