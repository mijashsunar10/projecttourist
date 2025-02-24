<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\TermsandCondition;
use Illuminate\Support\Facades\Validator;

class TermsandConditionController extends Controller
{
    public function index()
    {
        $terms = TermsandCondition::orderBy('id')->get();
        return view('frontend.company.termsandcondition.index', compact('terms'));
    }

    public function create()
    {
        
        return view('frontend.company.termsandcondition.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
                
        ]);
    
        $slug = Str::slug($request->title) . '-' . Str::uuid();
    
        $terms = new TermsandCondition();
        $terms->title = $request->title;
        $terms->content = $request->content;
        $terms->slug = $slug; // Assigning the generated slug
        $terms->save(); // Saving the record
    
        return redirect()->route('termsandconditionindex')->with('success', 'Term created successfully');
    }

    public function edit($slug)
    {
        $term = TermsandCondition::where('slug', $slug)->firstOrFail();
       
        return view('frontend.company.termsandcondition.edit', compact('term'));
        //  return view('frontend.company.termsandcondition.edit');
    }

    

    public function delete($slug)
    {
        
        $term = TermsandCondition::where('slug', $slug)->firstOrFail();
        $term->delete();
        return redirect()->route('termsandconditionindex')->with('success', 'Term deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',   
        ]);
        
        

        $term = TermsandCondition::findOrFail($id);
        $term->title = $request->title;
        $term->content = $request->content;
        
        $term->save();

        return redirect()->route('termsandconditionindex')->with('success', 'Term updated successfully');
    }
}
