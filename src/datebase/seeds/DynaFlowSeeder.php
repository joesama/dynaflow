<?php
class DynaFlowSeeder extends Seeder
{
    public function run()
	{
		DB::table('sys_flow')->delete();

		$sys_flow = array(
			array(
				'name'		 => 'Nyetir',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			)
		);

		DB::table('sys_flow')->insert( $sys_flow );
	}
}
