<?php

namespace App\Http\Controllers;

use App\models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index () {

        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}
