<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicantsTable extends Migration {

	public function up()
	{
		Schema::create('applicants', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('fname', 30);
			$table->string('sname', 30);
			$table->string('tname', 30);
			$table->string('lname', 30);
			$table->date('birth_date');
			$table->string('birth_place', 30);
			$table->string('nic', 30);
			$table->date('nic_issue_date');
			$table->string('nic_issue_place', 30);
			$table->integer('address')->unsigned();
			$table->string('mobile', 15);
			$table->string('email', 20);
			$table->integer('type')->unsigned();
			$table->enum('sex', array('Male', 'Female'));
		});
	}

	public function down()
	{
		Schema::drop('applicants');
	}
}