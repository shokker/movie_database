<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Movie;
use App\Category;

class CategoryController extends Controller
{
   public function show($id)

   {
      $categories = Category::all();
   	$category = Category::find($id);
   	return view('movies.category',compact('category','categories'));
   	
   }
}
