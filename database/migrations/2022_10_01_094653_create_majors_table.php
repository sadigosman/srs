<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMajorsTable extends Migration {

	public function up()
	{
		Schema::create('majors', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name', 50);
			$table->bigInteger('address_id')->unsigned();
			$table->bigInteger('department_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('majors');
	}
}