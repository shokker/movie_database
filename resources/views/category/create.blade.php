@extends('master')


@section('content')

<div class="col-md-12">

<form method="POST" action="/movies/category/create" role='form'>
    {!! csrf_field() !!}

    <div class='form-group'>
        <label for="title">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="">
    </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@endsection