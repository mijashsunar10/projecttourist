<?php
namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all()->groupBy('category');
        return view('documents.index', compact('documents'));
    }

    public function create()
    {
        return view('documents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:legal_documents,travel_association,awards',
          
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // $imagePath = $request->file('image')->store('documents', 'public');

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/documents'), $imageName);
        }
        Document::create([
            'title' => $request->title,
            'category' => $request->category,
          
            'image' => $imageName,
        ]);

        return redirect()->route('documents.index')->with('success', 'Document added successfully.');
    }

    public function edit($id)
    {
        $document = Document::findOrFail($id);
        return view('documents.edit', compact('document'));
    }

    public function update(Request $request, $id)
    {
        $document = Document::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:legal_documents,travel_association,awards',
           
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $document->image);
            $imagePath = $request->file('image')->store('documents', 'public');
            $document->image = $imagePath;
        }

        $document->update([
            'title' => $request->title,
            'category' => $request->category,
            
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/documents'), $imageName);

            // Delete old image
            if ($document->image) {
                unlink(public_path('images/documents/' . $document->image));
            }

            $document->image = $imageName;
        }

        $document->title = $request->title;
        $document->category = $request->category;
      
        $document->save();


        return redirect()->route('documents.index')->with('success', 'Document updated successfully.');
    }

    public function destroy($id)
{
    $document = Document::findOrFail($id);

    // Check if the document has an image before attempting to delete it
    if (!empty($document->image) && file_exists(public_path('images/documents/' . $document->image))) {
        unlink(public_path('images/documents/' . $document->image));
    }

    // Delete the document record from the database
    $document->delete();

    return redirect()->route('documents.index')->with('success', 'Document deleted successfully.');
}

}
