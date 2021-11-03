<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MovieController extends Controller{

    
    
    public function index(){
        $movies = Movie::all();
        // dd($movie);
        return view('home', compact('movies'));

    }

    public function show(){
        return view('home');

    }
}
