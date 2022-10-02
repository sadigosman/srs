<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('applicants', function(Blueprint $table) {
			$table->foreign('address')->references('id')->on('addresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('applicants', function(Blueprint $table) {
			$table->foreign('type')->references('id')->on('app_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('states', function(Blueprint $table) {
			$table->foreign('country')->references('id')->on('Countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('provinces', function(Blueprint $table) {
			$table->foreign('state')->references('id')->on('states')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->foreign('country')->references('id')->on('Countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->foreign('state')->references('id')->on('states')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->foreign('province')->references('id')->on('provinces')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('universities', function(Blueprint $table) {
			$table->foreign('address')->references('id')->on('addresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('faculties', function(Blueprint $table) {
			$table->foreign('university')->references('id')->on('universities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('faculties', function(Blueprint $table) {
			$table->foreign('address')->references('id')->on('addresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->foreign('faculty')->references('id')->on('faculties')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->foreign('address')->references('id')->on('addresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('majors', function(Blueprint $table) {
			$table->foreign('address')->references('id')->on('addresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('majors', function(Blueprint $table) {
			$table->foreign('department')->references('id')->on('departements')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->foreign('major')->references('id')->on('majors')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->foreign('app_id')->references('id')->on('applicants')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('applicants', function(Blueprint $table) {
			$table->dropForeign('applicants_address_foreign');
		});
		Schema::table('applicants', function(Blueprint $table) {
			$table->dropForeign('applicants_type_foreign');
		});
		Schema::table('states', function(Blueprint $table) {
			$table->dropForeign('states_country_foreign');
		});
		Schema::table('provinces', function(Blueprint $table) {
			$table->dropForeign('provinces_state_foreign');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->dropForeign('addresses_country_foreign');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->dropForeign('addresses_state_foreign');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->dropForeign('addresses_province_foreign');
		});
		Schema::table('universities', function(Blueprint $table) {
			$table->dropForeign('universities_address_foreign');
		});
		Schema::table('faculties', function(Blueprint $table) {
			$table->dropForeign('faculties_university_foreign');
		});
		Schema::table('faculties', function(Blueprint $table) {
			$table->dropForeign('faculties_address_foreign');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->dropForeign('departements_faculty_foreign');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->dropForeign('departements_address_foreign');
		});
		Schema::table('majors', function(Blueprint $table) {
			$table->dropForeign('majors_address_foreign');
		});
		Schema::table('majors', function(Blueprint $table) {
			$table->dropForeign('majors_department_foreign');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->dropForeign('certificates_major_foreign');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->dropForeign('certificates_app_id_foreign');
		});
	}
}