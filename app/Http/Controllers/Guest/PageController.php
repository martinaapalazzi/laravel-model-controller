<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show($id) {
        $singleMovie = Movie::where('id', $id)->first();;
        return view('movies.show', compact('singleMovie'));
    }
}
