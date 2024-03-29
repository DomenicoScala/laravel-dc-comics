<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationResult = $request->validate([
            'title' => 'required|max:256',
            'price' => 'required|numeric',
            'thumb' => 'nullable|url|max:1024',
            'series' => 'required|max:64',
            'sale_date' => 'required',
            'type' => 'required|max:32',
            'artists' => 'required',
            'writers' => 'required' 

        ]);
        
        
        
        
        $newComic = $request->all($validationResult);
        
        $comic = new Comic();

        $comic->title = $newComic['title'];
        $comic->description = $newComic['description'];
        $comic->thumb = $newComic['thumb'];
        $comic->price = $newComic['price'];
        $comic->series = $newComic['series'];
        $comic->sale_date = $newComic['sale_date'];
        $comic->type = $newComic['type'];
        $comic->artists = str_replace(',', '|', $newComic['artists']);
        $comic->writers = str_replace(',', '|', $newComic['writers']);
        
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $validationResult = $request->validate([
            'title' => 'required|max:256',
            'price' => 'required|numeric',
            'thumb' => 'nullable|url|max:1024',
            'series' => 'required|max:64',
            'sale_date' => 'required',
            'type' => 'required|max:32',
            'artists' => 'required',
            'writers' => 'required' 

        ]);
        
        
        
        $newComic = $request->all($validationResult);
        
        $comic->title = $newComic['title'];
        $comic->description = $newComic['description'];
        $comic->thumb = $newComic['thumb'];
        $comic->price = $newComic['price'];
        $comic->series = $newComic['series'];
        $comic->sale_date = $newComic['sale_date'];
        $comic->type = $newComic['type'];
        $comic->artists = str_replace(',', '|', $newComic['artists']);
        $comic->writers = str_replace(',', '|', $newComic['writers']);
        
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
