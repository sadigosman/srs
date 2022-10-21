<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartementsTable extends Migration {

	public function up()
	{
		Schema::create('departements', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name', 50);
			$table->bigInteger('faculty_id')->unsigned();
			$table->bigInteger('address_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('departements');
	}
}