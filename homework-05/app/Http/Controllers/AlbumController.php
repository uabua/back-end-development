<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genre;
use App\Models\Musician;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();

        return view('albums.index')->with('albums', $albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $musicians = Musician::all();
        $genres = Genre::all();

        return view('albums.create')
            ->with('musicians', $musicians)
            ->with('genres', $genres);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:1'],
            'musician_id' => ['required'],
            'genre_id' => ['required'],
        ]);

        Album::create([
            'name' => $request->name,
            'musician_id' => $request->musician_id,
            'genre_id' => $request->genre_id
        ]);

        return redirect()->route('album.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::where('id', $id)->first();
        $musicians = Musician::all();
        $genres = Genre::all();

        return view('albums.edit')
            ->with('album', $album)
            ->with('musicians', $musicians)
            ->with('genres', $genres);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'min:1'],
            'musician_id' => ['required'],
            'genre_id' => ['required'],
        ]);

        Album::where('id', $id)->update([
            'name' => $request->name,
            'musician_id' => $request->musician_id,
            'genre_id' => $request->genre_id
        ]);

        return redirect()->route('album.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Album::where('id', $id)->delete();

        return redirect()->route('album.index');
    }
}
