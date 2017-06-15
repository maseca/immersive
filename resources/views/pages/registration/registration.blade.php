@extends('layouts.master')

@section('title')
Registration
@endsection

@section('description')
Registration
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
	<h1>Forum Registration</h1>
	{!! Form::open(['url' => 'register']) !!}
		<div class="row">
			<div class="col-md-6">
			  <div class="form-group">
			  	{!! Form::label('first_name', 'First Name') !!}
			  	{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
			  	{!! Form::label('last_name', 'Last Name') !!}
			  	{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
			  </div>
			</div>
			<div class="col-md-6">	
			  <div class="form-group">
			  	{!! Form::label('email', 'Email') !!}
			  	{!! Form::email('email', null, ['class' => 'form-control']) !!}
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
			  	{!! Form::label('user_name', 'User Name') !!}
			  	{!! Form::text('user_name', null, ['class' => 'form-control']) !!}
			  </div>
			</div>
			<div class="col-md-6">		
			  <div class="form-group">
			  	{!! Form::label('password', 'Password') !!}
			  	{!! Form::password('password', ['class' => 'form-control']) !!}
			  </div>
			</div>
			<!--
			<div class="col-md-6">		
			  <div class="form-group">
			  	{!! Form::label('password', 'Confirm Password') !!}
			  	{!! Form::password('password', ['class' => 'form-control']) !!}
			  </div>
			</div>
			-->
			<div class="col-md-4 col-md-offset-4">
			  {!! Form::reset('Reset', ['class' => 'btn btn-defaul']) !!}
			  {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
			<a href="{{ url('/login') }}">Log In</a>
			<a href="{{ url('/') }}">Home</a>
			</div>
		</div>
	  {!! Form::close() !!}
@endsection
