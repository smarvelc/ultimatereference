@extends('_master')

@section('head')

@stop

@section('content')

Create a player
<br>
<br>
	{{Form::open(array('url'=>'player/create'))}}
		{{Form::label('name','Name')}}
		{{Form::text('name')}}
		{{Form::label('goals','Goals')}}
		{{Form::text('goals')}}
		{{Form::label('assists','Assists')}}
		{{Form::text('assists')}}
		<br>
		<br>

	{{Form::submit('Create New Player')}}

	{{Form::close()}}	


@stop