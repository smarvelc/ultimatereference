<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/* User Routes */
Route::get('/', function()
{
	return View::make('index');

});

Route::get('/home', function()
{
	return View::make('index');
});

Route::get('/signup', function()
{
	return "signup";
});

Route::get('/login', function()
{
	return "login";
});

Route::post('/signup', function()
{
	return "signup";
});

Route::post('/login', function()
{
	return "login";
});

Route::get('/logout', function()
{
	return "logout";
});
/* Player Page Routes */

Route::get('/player', function()
{
	return "player page";
});


Route::get('/player/edit/{id}', function()
{
	return "edit player page";
});
Route::post('/player/edit', function()
{
	return "edit player page";
});

Route::get('/player/create', function()
{
	return View::make('player_builder');
});
Route::post('/player/create', function()
{
	$player = new Player();

	$player->name = Input::get('name');
	$player->goals = Input::get('goals');
	$player->assists = Input::get('assists');
	$player->team()->associate();
	$player->save();

	return 'You have created a new player';

});

Route::get('/player/delete', function()
{
	return "delete player";
});
/* Team Page Routes */

Route::get('/teams/', function()
{
	return "Team List";
});

Route::get('/team/', function()
{
	return "Team Profile";
});

Route::get('/team/create', function()
{
	return View::make('team_builder');
});

Route::post('/team/create', function()
{
	$team = new Team();

	$team->name = Input::get('name');
	$team->wins = Input::get('wins');
	$team->losses = Input::get('losses');
	$team->save();

});

Route::get('/team/edit/{id}', function()
{
	return "edit team page";
});
Route::post('/team/edit', function()
{
	return "edit team page";
});
