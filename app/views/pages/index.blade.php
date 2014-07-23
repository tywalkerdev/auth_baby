@extends('layouts.master')

@section('content')
<div class="text-center">	
	<h1>Welcome to our page</h1>
	<a href="{{ URL::to('/create') }}"><button class="btn-success btn-lg">Signup</button></a>

	@if (Auth::guest())
		<h1>Login to see more</h1>
		<a href="{{ URL::to('/login') }}"><button class="btn-primary btn-lg">Login</button></a>
	@else 
		<h1>You are logged in</h1>
		<a href="{{ URL::to('/logout') }}"><button class="btn-primary btn-lg">Logout</button></a>
	@endif
</div>
@stop