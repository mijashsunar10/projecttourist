<?php

namespace App\Http\Controllers;

use App\Models\Tourfaq;
use Illuminate\Http\Request;
use App\Models\Tourtrips;

use Illuminate\Support\Str;

class TourfaqController extends Controller
{
    public function create($tourtrip_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        return view('frontend.tours.tourfaq.create', compact('tourtrip'));
    }

    public function store(Request $request, $tourtrip_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);

        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required',
        ]);

        Tourfaq::create([
            'tourtrip_id' => $tourtrip->id,
            'question' => $request->question,
            'answer' => $request->answer,
            'slug' => Str::slug($request->question . '-' . time()),
        ]);

        return redirect()->route('tourtripshow', ['id' => $tourtrip_id, 'section' => 'faqs'])->with('success', 'faq added successfully.');
    }

    public function edit($tourtrip_id, $tourfaq_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        $tourfaq = Tourfaq::where('tourtrip_id', $tourtrip_id)->findOrFail($tourfaq_id);
        return view('frontend.tours.tourfaq.edit', compact('tourtrip', 'tourfaq'));
    }
    
    public function update(Request $request, $tourtrip_id, $tourfaq_id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    
        $tourfaq = Tourfaq::where('tourtrip_id', $tourtrip_id)->findOrFail($tourfaq_id);
        $tourfaq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
    
        return redirect()->route('tourtripshow', ['id' => $tourtrip_id, 'section' => 'faqs'])->with('success', 'faq updated successfully.');
    }
    

    public function destroy($tourfaq_id)
    {
        $tourfaq = Tourfaq::findOrFail($tourfaq_id);
        $tourtrip_id = $tourfaq->tourtrip_id;
        $tourfaq->delete();

        return redirect()->route('tourtripshow', ['id' => $tourtrip_id, 'section' => 'faqs'])->with('success', 'faq deleted successfully.');
    }

}
