<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMajorsTable extends Migration {

	public function up()
	{
		Schema::create('majors', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->integer('address')->unsigned();
			$table->integer('department')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('majors');
	}
}