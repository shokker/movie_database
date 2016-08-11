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

{!! Form::open(['url'=>'auth/login', 'method'=>'post','id'=>'login-form' ]) !!}

<h2>Login</h2>


<div class="form-group">
  
  {!! Form::label('email', 'Email') !!}
  {!! Form::email('email',null, [
    'class'=>'form-control required email',
    'required' => true,
    'placeholder'=>'email@example',
    'autofocus'=>true,

  ]) !!}
</div>
<div class="form-group">
{!! Form::label('password','Password') !!}
  {!! Form::password('password', [
    'class'=>'form-control required password',
    'reqiured'=>true,

  ]) !!}
  <label>
  {!! Form::checkbox('remember', 'remember', true) !!}
  Remember me
  </label>

  <div class="form-group">
    
{!! Form::submit('Submit', [
  'class'=>'btn btn-default',
]) !!}

  </div>

  {!! Form::close() !!}
</div>

@endsection