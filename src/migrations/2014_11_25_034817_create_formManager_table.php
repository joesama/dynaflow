<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormManagerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sys_form_manager', function($table){
			$table->increments('id');
			$table->integer('application_id')->references('id')->on('sys_application');
			$table->integer('step_id')->references('id')->on('sys_flow_step');
			$table->string('name')->default(null);
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
		Schema::drop('sys_form_manager');
	}

}
