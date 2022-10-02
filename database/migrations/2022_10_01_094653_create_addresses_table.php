<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	public function up()
	{
		Schema::create('addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('country')->unsigned();
			$table->integer('state')->unsigned();
			$table->integer('province')->unsigned();
			$table->string('city', 15);
			$table->string('street', 50)->nullable();
			$table->mediumText('comment');
		});
	}

	public function down()
	{
		Schema::drop('addresses');
	}
}