<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitiesTable extends Migration {

	public function up()
	{
		Schema::create('universities', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 50);
			$table->bigInteger('address_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('universities');
	}
}