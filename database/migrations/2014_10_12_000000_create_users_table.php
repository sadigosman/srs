<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_type')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('status')->nullable();
            $table->string('role')->nullable();
            $table->string('fname', 30)->nullable();
			$table->string('sname', 30)->nullable();
			$table->string('tname', 30)->nullable();
			$table->string('lname', 30)->nullable();
			$table->date('birth_date')->nullable();
			$table->string('birth_place', 30)->nullable();
			$table->string('nic', 30)->nullable();
			$table->date('nic_issue_date')->nullable();
			$table->string('nic_issue_place', 30)->nullable();
			$table->bigInteger('address')->unsigned()->nullable();
			$table->string('mobile', 15)->nullable();
			$table->bigInteger('type')->unsigned()->nullable();
			$table->enum('sex', array('Male', 'Female'))->nullable();
			$table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
