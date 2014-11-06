<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysFlowStepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sys_flow_step', function($table){
			$table->increments('id');
			$table->integer('sys_flow_id')->references('id')->on('sys_flow');
			$table->string('name')->default(null);
			$table->string('action')->default(null);
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
		//
		Schema::drop('sys_flow_step');
	}

}
