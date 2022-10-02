<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacultiesTable extends Migration {

	public function up()
	{
		Schema::create('faculties', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 50);
			$table->integer('university')->unsigned();
			$table->integer('address')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('faculties');
	}
}