<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartementsTable extends Migration {

	public function up()
	{
		Schema::create('departements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->integer('faculty')->unsigned();
			$table->integer('address')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('departements');
	}
}