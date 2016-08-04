@extends('master')

@section('content')

<div class="col-md-4">

<form method="POST" action="/auth/login" role='form'>
    {!! csrf_field() !!}

    <div class='form-group'>
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password">   
    </div>

   <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

@endsection