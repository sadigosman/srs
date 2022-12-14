<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('applicants', function(Blueprint $table) {
			$table->foreign('address_id')->references('id')->on('addresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('applicants', function(Blueprint $table) {
			$table->foreign('app_type_id')->references('id')->on('app_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('states', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('state_id')->references('id')->on('states')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->foreign('state_id')->references('id')->on('states')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('universities', function(Blueprint $table) {
			$table->foreign('address_id')->references('id')->on('addresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('faculties', function(Blueprint $table) {
			$table->foreign('university_id')->references('id')->on('universities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('faculties', function(Blueprint $table) {
			$table->foreign('address_id')->references('id')->on('addresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->foreign('faculty_id')->references('id')->on('faculties')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->foreign('address_id')->references('id')->on('addresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('majors', function(Blueprint $table) {
			$table->foreign('address_id')->references('id')->on('addresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('majors', function(Blueprint $table) {
			$table->foreign('department_id')->references('id')->on('departements')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->foreign('major_id')->references('id')->on('majors')
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
			$table->dropForeign('applicants_address_id_foreign');
		});
		Schema::table('applicants', function(Blueprint $table) {
			$table->dropForeign('applicants_app_type_id_foreign');
		});
		Schema::table('states', function(Blueprint $table) {
			$table->dropForeign('states_country_id_foreign');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_state_id_foreign');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->dropForeign('addresses_country_id_foreign');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->dropForeign('addresses_state_id_foreign');
		});
		Schema::table('addresses', function(Blueprint $table) {
			$table->dropForeign('addresses_city_id_foreign');
		});
		Schema::table('universities', function(Blueprint $table) {
			$table->dropForeign('universities_address_id_foreign');
		});
		Schema::table('faculties', function(Blueprint $table) {
			$table->dropForeign('faculties_university_id_foreign');
		});
		Schema::table('faculties', function(Blueprint $table) {
			$table->dropForeign('faculties_address_id_foreign');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->dropForeign('departements_faculty_id_foreign');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->dropForeign('departements_address_id_foreign');
		});
		Schema::table('majors', function(Blueprint $table) {
			$table->dropForeign('majors_address_id_foreign');
		});
		Schema::table('majors', function(Blueprint $table) {
			$table->dropForeign('majors_department_id_foreign');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->dropForeign('certificates_major_id_foreign');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->dropForeign('certificates_app_id_foreign');
		});
	}
}