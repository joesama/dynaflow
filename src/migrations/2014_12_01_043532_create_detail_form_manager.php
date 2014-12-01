<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailFormManager extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sys_detail_form_manager', function($table){
			$table->increments('id');
			$table->integer('form_manager_id')->references('id')->on('sys_form_manager');
			$table->string('title')->default(null);
			$table->smallInteger('type')->default(null);
			$table->string('name')->default(null);
			$table->string('value')->default(null);
			$table->boolean('require')->default(null);
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
		Schema::drop('sys_detail_form_manager');
	}

}
