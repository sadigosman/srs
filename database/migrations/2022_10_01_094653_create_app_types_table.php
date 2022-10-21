<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppTypesTable extends Migration {

	public function up()
	{
		Schema::create('app_types', function(Blueprint $table) {
			$table->id();
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