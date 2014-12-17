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
	echo "Environment: ".App::environment();

	$results = DB::select('SHOW DATABASES;');

	print_r($results);

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
	return "create new player";
});
Route::post('/player/create', function()
{
	return "create new player";
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
	return "create new team";
});

Route::post('/team/create', function()
{
	return "create new team";
});

Route::get('/team/edit/{id}', function()
{
	return "edit team page";
});
Route::post('/team/edit', function()
{
	return "edit team page";
});
