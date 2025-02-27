<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;


class NoteController extends Controller
{
    public function create()
    {
        return view('frontend.company.payment.note.create');
    }

    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'note' => 'required|array|min:1',
            'note.*' => 'required|string|max:255'
        ]);
        
        if (!$validated) {
            echo 'Validation failed';
            return redirect()->back()->with('error', 'Please add at least one note.');
        }

        // Save notes
        foreach ($request->note as $noteText) {
            Note::create([
                'note' => $noteText
            ]);
        }

        return redirect()->route('payment')->with('success', 'Note created successfully.');
    }

    public function edit( $id )
    {
        $note = Note::findOrFail($id);
        return view('frontend.company.payment.note.edit', compact('note'));
    }

    public function update(Request $request,  $id)
    {
        $note = Note::findOrFail($id);
        $request->validate([
            'note' => 'required|string|max:255'
        ]);

        $note->update($request->all());

        return redirect()->route('payment')->with('success', 'Note updated successfully.');
    }

    public function destroy( $id )
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('payment')->with('success', 'Note deleted successfully.');
    }
}
