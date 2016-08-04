@extends('master')


@section('content')

<div class="col-md-12">

<form method="POST" action="/movies/create" role='form'>
    {!! csrf_field() !!}

    <div class='form-group'>
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="">
    </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@endsection