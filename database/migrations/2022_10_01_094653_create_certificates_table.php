<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration {

	public function up()
	{
		Schema::create('certificates', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('cert_no', 20);
			$table->bigInteger('major_id')->unsigned();
			$table->date('issue_date');
			$table->bigInteger('app_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('certificates');
	}
}