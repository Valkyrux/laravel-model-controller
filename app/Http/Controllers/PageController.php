<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    protected function index()
    {
        $db_movies = Movie::all();
        return view('home', compact('db_movies'));
    }
}
