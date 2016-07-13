<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Category;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class MovieController extends Controller
{
    public function index()
    {

    	$movies = Movie::all();
    	$categories = Category::all();
        $years = DB::table('movies')->select('year')->distinct()->get();
        
    	return view('movies.home',compact('movies','categories','years'));
    }

    public function show($id)
    {
    	$movie = Movie::find($id);
    	return view('movies.show',compact('movie'));
    }
}
