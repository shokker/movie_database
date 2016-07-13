@extends('master')

@section('title') 

 {{ $movie->title }}

@endsection

@section('content')

	<h2>{{ $movie->title  }}</h2>

	<img src="{{$movie->image }}" alt="">

	<p> {{ $movie->text }} </p>

	<p>{{ $movie->year }}</p>


@endsection