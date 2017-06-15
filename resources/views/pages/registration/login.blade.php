@extends('layouts.master')

@section('title')
Log In
@endsection

@section('description')
Log In
@endsection

@section('content')
	@if (count($errors))
		<div class="alert alert-danger">
		  <strong>Danger!</strong>
		   <ul>
		      @foreach ($errors->all() as $error)
		         <li>{{ $error }}</li>
		      @endforeach
		   </ul>
		</div>
	@endif
	<h1>Forum Log In</h1>
	{!! Form::open(['url' => 'login']) !!}
		<div class="row">
			<div class="col-md-6">	
			  <div class="form-group">
			  	{!! Form::label('email', 'Email') !!}
			  	{!! Form::email('email', null, ['class' => 'form-control']) !!}
			  </div>
			</div>
			<div class="col-md-6">		
			  <div class="form-group">
			  	{!! Form::label('password', 'Password') !!}
			  	{!! Form::password('password', ['class' => 'form-control']) !!}
			  </div>
			</div>
			<div class="col-md-4 col-md-offset-4">
			  {!! Form::reset('Reset', ['class' => 'btn btn-defaul']) !!}
			  {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
			<a href="{{ url('/register') }}">Register</a>
			<a href="{{ url('/') }}">Home</a>
			</div>
		</div>
	  {!! Form::close() !!}
@endsection
