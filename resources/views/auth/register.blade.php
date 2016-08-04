
@extends('master')

@section('content')

<div class="col-md-4">

<form method="POST" action="/auth/register" role='form'>
    {!! csrf_field() !!}

     <div class='form-group'>
        <label for="Name">Name</label>
        <input type="text" class="form-control" id="Name" name="name" value="{{ old('name') }}">
    </div>

    <div class='form-group'>
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password">   
    </div>
     <div class="form-group">
        <label for="c_password">Confirm Password:</label>
        <input type="password" class="form-control" name="password_confirmation" id="c_password">   
    </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

@endsection