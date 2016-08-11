
@extends('master')

@section('content')
<div class="col-md-4">

@if(count($errors)>0)
  @foreach($errors->all() as $error)
    <ul class='alert alert-danger'>
      <li>{{ $error }}</li>
      
    </ul>
  @endforeach
@endif


{!! Form::open(['url'=>'auth/register', 'method'=>'post' ]) !!}

<h2>Register</h2>


<div class="form-group">
{!! Form::label('name', 'Name') !!}
{!! Form::text('name', null, [
    'class'=>'form-control',
    'reqiured'=>true,
    'autofocus'=>true,

]) !!}    
</div>
<div class="form-group">
  
  {!! Form::label('email', 'Email') !!}
  {!! Form::email('email',null, [
    'class'=>'form-control',
    'required' => true,
    'placeholder'=>'email@example',
    
  ]) !!}
</div>
<div class="form-group">
{!! Form::label('password','Password') !!}
  {!! Form::password('password', [
    'class'=>'form-control',
    'reqiured'=>true,

  ]) !!}

  <div class="form-group">
{!! Form::label('password_confirmation','Password again') !!}
  {!! Form::password('password_confirmation', [
    'class'=>'form-control',
    'reqiured'=>true,

  ]) !!}

  <div class="form-group">  
    {!! Form::submit('Submit', [
        'class'=>'btn btn-default',
    ]) !!}
  </div>

  {!! Form::close() !!}
</div>


{{--<div class="col-md-4">

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
</div> --}}

@endsection