<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	public function up()
	{
		Schema::create('addresses', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->bigInteger('country_id')->unsigned();
			$table->bigInteger('state_id')->unsigned();
			$table->bigInteger('city_id')->unsigned();
			$table->string('quarter', 30);
			$table->string('street', 50)->nullable();
			$table->mediumText('comment')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('addresses');
	}
}