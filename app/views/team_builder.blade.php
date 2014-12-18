@extends('_master')

@section('head')

@stop

@section('content')

Create A New Team

<br>
<br>
	{{Form::open(array('url'=>'team/create'))}}
		{{Form::label('name','Team Name')}}
		{{Form::text('name')}}
		{{Form::label('wins','Wins')}}
		{{Form::text('wins')}}
		{{Form::label('losses','Losses')}}
		{{Form::text('losses')}}
		<br>
		<br>

	{{Form::submit('Create New Team')}}

	{{Form::close()}}	


@stop