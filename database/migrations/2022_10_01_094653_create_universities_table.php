<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUniversitiesTable extends Migration {

	public function up()
	{
		Schema::create('universities', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 50);
			$table->integer('address')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('universities');
	}
}