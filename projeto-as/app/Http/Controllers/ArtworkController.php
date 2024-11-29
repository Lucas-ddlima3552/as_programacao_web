<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
        public function index()
    {
        $artwork = Artwork::all();
        return view('artworks.index', compact('artworks'));
    }

    public function create()
    {
        $artists = Artist::all();
        return view('artworks.create', compact('artists'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'title'=>'required',
            'creation_year'=>'required',
            'category'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gifmwebp|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $artwork = new Artwork();
        $artwork->title = $request->title;
        $artwork->creation_year = $request->creation_year;
        $artwork->category = $request->category;
        $artwork->image = 'images/'.$imageName;
        $artwork->artist_id = $request->artist_id;
        $artwork->save();

        return redirect('artworks')->with('success', 'artwork created successfully.');
    }

    public function edit($id)
    {
        $artworks = Artwork::findOrFail($id);
        $artists = Artist::all();
        return view('artworks.edit', compact('artworks', 'artists'));
    }

    public function update(Request $request, $id)
    {
        $artwork = Artwork::findOrFail($id);
        $artwork->update($request->all());

        $artwork->title = $request->title;
        $artwork->creation_year = $request->creation_year;
        $artwork->category = $request->category;
        
        if(!is_null($request->image))
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            $artwork->image = 'images/'.$imageName;
        }
        $artwork->save();
        
        return redirect('artworks')->with('success', 'artwork updated successfully.');
    }

    public function destroy($id)
    {
        $artwork = Artwork::findOrFail($id);
        $artwork->delete();
        return redirect('artworks')->with('success', 'artwork deleted successfully.');
    }
}
