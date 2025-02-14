<?php

namespace App\Http\Controllers;

use App\Models\Expeditionfaq;
use App\Models\Mountain;
use Illuminate\Http\Request;

use Illuminate\Support\Str;


class ExpeditionfaqController extends Controller
{
    public function create($mountain_id)
    {
        $mountain = Mountain::findOrFail($mountain_id);
        return view('frontend.expeditions.mountainfaq.create', compact('mountain'));
    }

    public function store(Request $request, $mountain_id)
    {
        $mountain = Mountain::findOrFail($mountain_id);

        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required',
        ]);

        Expeditionfaq::create([
            'mountain_id' => $mountain->id,
            'question' => $request->question,
            'answer' => $request->answer,
            'slug' => Str::slug($request->question . '-' . time()),
        ]);

        return redirect()->route('mountainshow', ['id' => $mountain_id, 'section' => 'faqs'])->with('success', 'faq added successfully.');
    }

    public function edit($mountain_id, $mountainfaq_id)
    {
        $mountain = Mountain::findOrFail($mountain_id);
        $mountainfaq = Expeditionfaq::where('mountain_id', $mountain_id)->findOrFail($mountainfaq_id);
        return view('frontend.expeditions.mountainfaq.edit', compact('mountain', 'mountainfaq'));
    }
    
    public function update(Request $request, $mountain_id, $mountainfaq_id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    
        $mountainfaq = Expeditionfaq::where('mountain_id', $mountain_id)->findOrFail($mountainfaq_id);
        $mountainfaq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
    
        return redirect()->route('mountainshow', ['id' => $mountain_id, 'section' => 'faqs'])->with('success', 'faq updated successfully.');
    }
    

    public function destroy($mountainfaq_id)
    {
        $mountainfaq = Expeditionfaq::findOrFail($mountainfaq_id);
        $mountain_id = $mountainfaq->mountain_id;
        $mountainfaq->delete();

        return redirect()->route('mountainshow', ['id' => $mountain_id, 'section' => 'faqs'])->with('success', 'faq deleted successfully.');
    }

}
