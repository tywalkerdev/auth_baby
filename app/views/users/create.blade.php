@extends('layouts.master')

@section('content')
	
	<h1>Signup Now!</h1>	
	{{ Form::open() }}
		<div class="form-group">
			{{ Form::label('username', 'Username: ') }}		
			{{ Form::text('username', null, ['class' => 'form-control']) }}		
		</div>
		<div class="form-group">
			{{ Form::label('email', 'Email: ') }}		
			{{ Form::text('email', null, ['class' => 'form-control']) }}		
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Password: ') }}		
			{{ Form::password('password', ['class' => 'form-control']) }}		
		</div>
		<div class="form-group">
			{{ Form::label('password_confirmation', 'Password Confirm: ') }}		
			{{ Form::password('password_confirmation', ['class' => 'form-control']) }}		
		</div>
		<div class="form-group">	
			{{ Form::submit('Signup Now!', ['class' => 'btn btn-primary']) }}		
		</div>

	{{ Form::close() }}

@stop
