<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
protected $fillable = ['title','text','year','tmdb','image','slug','coverImg'];

    public function category()
    {
    	return $this->belongsToMany(Category::class);
    }
}
