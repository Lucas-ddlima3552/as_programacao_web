<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('artists.index', compact('artists'));
    }

    public function create()
    {
        return view('artists.create');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name'=>'required',
            'biography'=>'required',
            'birth_year'=>'required'
        ]);

        $artist = new Artist();
        $artist->name = $request->name;
        $artist->biography = $request->biography;
        $artist->birth_year = $request->birth_year;
        $artist->save();

        return redirect('artists')->with('success', 'artist created successfully.');
    }

    public function edit($id)
    {
        $artist = Artist::findOrFail($id);
        return view('artists.edit', compact('artist'));
    }

    public function update(Request $request, $id)
    {
        $artist = Artist::findOrFail($id);
        $artist->update($request->all());

        $artist->name = $request->name;
        $artist->biography = $request->biography;
        $artist->birth_year = $request->birth_year;
        
        
        return redirect('artists')->with('success', 'artist updated successfully.');
    }

    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();
        return redirect('artists')->with('success', 'artist deleted successfully.');
    }
}
