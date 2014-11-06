<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysFlowManagerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sys_flow_manager', function($table){
			$table->increments('id');
			$table->integer('flow_id')->references('id')->on('sys_flow');
			$table->integer('step_id')->references('id')->on('sys_flow_step');
			$table->integer('step_next_id')->references('id')->on('sys_flow_step');
			$table->string('trigger')->default(null);
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
		Schema::drop('sys_flow_manager');
	}

}
