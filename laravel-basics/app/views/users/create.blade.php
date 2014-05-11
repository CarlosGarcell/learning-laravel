@extends('layouts.default')

@section('content')
	
	<h2>Create New User</h2>

	{{ Form::open(['route' => 'users.store']) }}

		<div>

			{{ Form::label('username', 'Username: ') }}

			{{ Form::text('username') }}

			{{ $errors->first('username') }}

		</div>

		<div>

			{{ Form::label('password', 'Password: ') }}

			{{ Form::password('password') }}

			{{ $errors->first('password') }}

		</div>

		<div>

			{{ Form::submit('Register') }}

		</div>

		{{ Form::close() }}

@stop