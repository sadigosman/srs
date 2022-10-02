<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatesTable extends Migration {

	public function up()
	{
		Schema::create('states', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 15);
			$table->integer('country')->unsigned();
			$table->mediumText('desc')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('states');
	}
}