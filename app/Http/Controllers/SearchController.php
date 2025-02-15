<?php

namespace App\Http\Controllers;

use App\Models\Trip;

use App\Models\Mountain;
use App\Models\Tourtrips;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $trips = Trip::where('name', 'like', "%$query%")->get();
        $tourtrips = Tourtrips::where('name', 'like', "%$query%")->get();
        $mountains = Mountain::where('name', 'like', "%$query%")->get();

        return response()->json([
            'trips' => $trips,
            'tourtrips' => $tourtrips,
            'mountains' => $mountains,
        ]);
    }
}
