<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
            // SELECT * FROM 'movies'
        $movies = Movie::all();
            // che file voglio prendere //che dati voglio metterci dentro
        return view('movies.index', compact('movies'));
    }

    public function show($id) {
            // SELECT * FROM 'movies' WHERE id = $id 
    // $singleMovie = Movie::where('id', $id)->first();
        $singleMovie = Movie::find($id);
        return view('movies.show', compact('singleMovie'));
    }
}


// metodi di una classe non possono essere anonime (per forza public function NomeFunction())