<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teams', function($table){

			$table->increments('id');

			$table->timestamps();

			$table->string('name');
			$table->integer('wins');
			$table->integer('losses');
			$table->integer('total_points');
			$table->integer('total_assists');
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
		Schema::drop('teams');
		//
	}

}
