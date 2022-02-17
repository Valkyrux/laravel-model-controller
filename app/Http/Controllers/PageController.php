<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    protected function index()
    {
        $movies = Movie::all();
        dd($movies);
        return view('home');
    }
}
