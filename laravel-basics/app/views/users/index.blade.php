@extends('layouts.default')

@section('content')

	<h2>All Users</h2>

	@if($users->count())

		@foreach ($users as $user)

			<li>{{ link_to("/users/{$user->username}", $user->username) }}</li>

		@endforeach

	@else

	<p>No users in the database</p>

	@endif

@stop   