<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Movie;
use App\Category;

class CategoryController extends Controller
{
   public function show($id)

   {
    $categories = Category::all();
   	$category = Category::find($id);
   	$years = DB::table('movies')->select('year')->distinct()->get();
   	return view('movies.category',compact('category','categories','years'));
   	
   }
}
