<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProvincesTable extends Migration {

	public function up()
	{
		Schema::create('provinces', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 15);
			$table->mediumText('desc')->nullable();
			$table->integer('state')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('provinces');
	}
}