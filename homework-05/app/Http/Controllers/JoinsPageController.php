<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinsPageController extends Controller
{
    public function getInnerJoin()
    {
        return DB::table('albums')
            ->join('genres', 'genres.id', '=', 'albums.genre_id')
            ->join('musicians', 'musicians.id', '=', 'albums.musician_id')
            ->select('albums.name', 'musicians.name as musician_name',
                'genres.name as genre_name')
            ->get();
    }

    public function getLeftJoin()
    {
        return DB::table('genres')
            ->leftJoin('albums', 'genres.id', '=', 'albums.genre_id')
            ->select('genres.name', 'albums.name as album_name')
            ->get();
    }

    public function getRightJoin()
    {
        return DB::table('albums')
            ->rightJoin('musicians', 'musicians.id', '=', 'albums.musician_id')
            ->select('musicians.name', 'albums.name as album_name')
            ->get();
    }

    public function getJoins()
    {
        $albums = $this->getInnerJoin();
        $genres = $this->getLeftJoin();
        $musicians = $this->getRightJoin();

        return view('joins')
            ->with('albums', $albums)
            ->with('genres', $genres)
            ->with('musicians', $musicians);
    }
}
