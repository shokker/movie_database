<?php

namespace App\Http\Controllers;
use App\Movie;
use App\Category;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\movieRequest;
use App\Http\Requests\tmdbRequest;
use App\Http\Requests\categoryRequest;

class MovieController extends Controller
{
    public function index()
    {
        //return tmdb()->getMovie(95)->getJSON();


    	$movies = Movie::all();
    	$categories = Category::all()->sortby('name');
        $years = DB::table('movies')->select('year')->distinct()->get();
        
    	return view('movies.home',compact('movies','categories','years'));
    }

    public function show($slug)
    {
        $categories = Category::all()->sortby('name');
    	$movie = Movie::whereSlug($slug)->first();
       
        $years = DB::table('movies')->select('year')->distinct()->get();
    	return view('movies.show',compact('movie','years','categories'));
    }

    public function by_year($year)
    {
     $movies = Movie::where('year',$year)->get();
     $categories = Category::all()->sortby('name');
     $years = DB::table('movies')->select('year')->distinct()->get();
     return view('movies.year',compact('movies','categories','years','year'));   
    }

    public function create()
    {
        return view('movies.create');
    }
    

    public function postCreate(movieRequest $request)
    {
        
        $movies = tmdb()->searchMovie($request->title);
        $counter = count($movies);
        if($counter>3){
            $counter = 3;
        }
        $categories = Category::all();
        return view('movies.create_tmdb',compact('movies','categories','counter'));
    }

    public function postCreate_tmdb(tmdbRequest $request)
    {
       $movie = tmdb()->getMovie($request->get('movie'));
       $imageName =$request->get('movie'). '.' . $request->file('image')->getClientOriginalExtension();
       $imageNameCover =$request->get('movie') . '-cover' . '.' . $request->file('cover-img')->getClientOriginalExtension();
       //return dd( $request->file('image'));
       //
       $m = Movie::create([
        
        'title'=>$movie->get('title'),
        'text'=>$movie->get('overview'),
        'tmdb'=>$request->get('movie'),
        'year'=>date('Y', strtotime($movie->get('release_date'))),
        'image'=>$imageName,
        'coverImg'=>$imageNameCover,

        ]);

       $m->update([

            'slug'=>createSlug($m->title,$m->id),
        ]);
        
       

        $request->file('image')->move(
        base_path() . '/public/img/', $imageName
    );
        $request->file('cover-img')->move(
        base_path() . '/public/img/', $imageNameCover
        );

       $m->category()->sync($request->get('category') ?: []);
       $url = url('movies',$m->slug);
       return redirect($url);

    }
    public function categoryshow($id)

   {
    $categories = Category::all()->sortby('name');
    $category = Category::find($id);
    $years = DB::table('movies')->select('year')->distinct()->get();
    return view('movies.category',compact('category','categories','years'));
    
   }

   public function categoryCreate()
    {
        return view('category.create');
    }

    public function categoryPostCreate(categoryRequest $request)
    {
        $category = Category::create([
            'name'=>$request->get('name')
            ]);
        return redirect('/');
    }
    public function edit($id)
    {
        $movie = Movie::find($id);
        $categories = Category::all();
        $movie->category;
        return view('movies.edit',compact('movie','categories','counter'));

    }
    public function update(tmdbRequest $request, $id)

    {
        //return dd($request->all());
        $movies = tmdb()->searchMovie($request->title);
        $counter = count($movies);
        if($counter>3){
            $counter = 3;
        }
        $categories = Category::all();
        $movie = Movie::find($id);
        $imageName =$movie->tmdb. '.' . $request->file('image')->getClientOriginalExtension();
        $imageNameCover =$request->get('movie') . '-cover' . '.' . $request->file('cover-img')->getClientOriginalExtension();
       //return dd( $request->file('image'));
       $movie->update([
        'image'=>$imageName,
        'coverImg'=>$imageNameCover,

        ]);
        $request->file('image')->move(
        base_path() . '/public/img/', $imageName
        );
        $request->file('cover-img')->move(
        base_path() . '/public/img/', $imageNameCover
        );

        $movie->category()->sync($request->get('category') ?: []);
        return view('movies.update_tmdb',compact('movies','categories','counter','movie'));


    }
    public function putUpdate_tmdb(movieRequest $request, $id)

    {
        $m = Movie::find($id);
        $movie = tmdb()->getMovie($request->get('movie'));
        $m->update([
        'slug'=>createSlug($movie->get('title'),$m->id),
        'title'=>$movie->get('title'),
        'text'=>$movie->get('overview'),
        'tmdb'=>$request->get('movie'),
        'year'=>date('Y', strtotime($movie->get('release_date'))),

        ]);
        $url = url('movies',$m->slug);
        return redirect($url);


    }
    public function delete($id)
    {

       $movie = Movie::find($id);
       $movie->delete();

        $url = url('/');
        return redirect($url);  
   }
}

