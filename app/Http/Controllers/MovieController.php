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
        $categories = Category::all();
    	$movie = Movie::find($id);
        $years = DB::table('movies')->select('year')->distinct()->get();
    	return view('movies.show',compact('movie','years','categories'));
    }

    public function by_year($year)
    {
     $movies = Movie::where('year',$year)->get();
     $categories = Category::all();
     $years = DB::table('movies')->select('year')->distinct()->get();
     return view('movies.year',compact('movies','categories','years','year'));   
    }
}

