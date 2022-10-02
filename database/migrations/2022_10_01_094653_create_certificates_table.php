<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCertificatesTable extends Migration {

	public function up()
	{
		Schema::create('certificates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('cert_no', 20);
			$table->integer('major')->unsigned();
			$table->date('issue_date');
			$table->integer('app_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('certificates');
	}
}