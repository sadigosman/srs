<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration {

	public function up()
	{
		Schema::create('states', function(Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('name_ar')->nullable();
			$table->char('code', 3)->nullable();

		
			$table->bigInteger('country_id')->unsigned();
			//$table->foreignId('country_id')->nullable()->constrained();

			// $table->foreign('country')->references('id')->on('countries')->onDelete('cascade');
			
		});

		
	}

	public function down()
	{
		Schema::drop('states');
	}
}