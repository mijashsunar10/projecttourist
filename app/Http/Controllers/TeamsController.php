<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('frontend.company.ourteam', compact('teams'));
        
    }

   public function create()
    {
        return view('frontend.company.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/teams'), $imageName);
        }

        Team::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imageName,
        ]);

        return redirect()->route('ourteam');

    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        if ($team->image) {

            File::delete(public_path('images/teams/' . $team->image));
            
        }
        $team->delete();
        return redirect()->route('ourteam');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('frontend.company.teams.edit', compact('team'));
    }  
    
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $customMessages = [
            'image.uploaded' => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
        ];
    
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], $customMessages);
    
        $imageName = $team->image;
        if ($request->hasFile('image')) {
            if ($team->image) {
                File::delete(public_path('images/teams/' . $team->image));
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/teams'), $imageName);
        }
    
        $team->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imageName,
        ]);
    
        return redirect()->route('ourteam');
    }
}