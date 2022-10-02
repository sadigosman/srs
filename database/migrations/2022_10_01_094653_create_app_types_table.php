<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppTypesTable extends Migration {

	public function up()
	{
		Schema::create('app_types', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 10);
			$table->mediumText('desc');
		});
	}

	public function down()
	{
		Schema::drop('app_types');
	}
}