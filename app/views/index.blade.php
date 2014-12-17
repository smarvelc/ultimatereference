@extends('_master')

@section('head')

@stop

@section('content')

Search for a team!

{{ Form::open(array('url' => '/team', 'method' => 'GET')) }}

		{{ Form::label('query','Search') }}

		{{ Form::text('query'); }}

		{{ Form::submit('Search'); }}

	{{ Form::close() }}

@stop