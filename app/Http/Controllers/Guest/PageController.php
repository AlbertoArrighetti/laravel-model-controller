<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use DateTime;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();
        // dd($movies);

        foreach ($movies as $movie) {
            $movieDate = DateTime::createFromFormat('Y-m-d', $movie->date);
            $movie->formattedDate = $movieDate->format('M d Y');
        }
        

        return view('home', compact('movies'));
    }
}
