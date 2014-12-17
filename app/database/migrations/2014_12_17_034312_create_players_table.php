<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('players', function($table){

			$table->increments('id');

			$table->timestamps();

			$table->string('name');
			$table->integer('goals');
			$table->integer('assists');
			
			$table->foreign('team_id')->references('id')->on('teams');
		});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('players');
		//
	}

}
