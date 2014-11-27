<?php
class DynaFlowSeeder extends Seeder
{
    public function run()
	{

		DB::table('sys_flow_manager')->delete();
		DB::table('sys_flow_step')->delete();
		DB::table('sys_flow')->delete();

		//flow
		$sys_flow = array(
			array(
				'id'		 => 1,
				'name'		 => 'Makan',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			)
		);
		DB::table('sys_flow')->insert( $sys_flow );

		//flow step
		$sys_flow_step = array(
			array(
				'id'		 	=> 1,
				'sys_flow_id'	=> 1,
				'name'			=> 'Ampil Piring',
				'action'		=> 'test/piring',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
			), array(
				'id'		 	=> 2,
				'sys_flow_id'	=> 1,
				'name'			=> 'Ampil Nasi',
				'action'		=> 'test/nasi',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
			), array(
				'id'		 	=> 3,
				'sys_flow_id'	=> 1,
				'name'			=> 'Ampil Lauk',
				'action'		=> 'test/lauk',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
			), array(
				'id'		 	=> 4,
				'sys_flow_id'	=> 1,
				'name'			=> 'Ampil Sayur',
				'action'		=> 'test/sayur',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
			), array(
				'id'		 	=> 5,
				'sys_flow_id'	=> 1,
				'name'			=> 'Makan',
				'action'		=> 'test/makan',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
			), array(
				'id'		 	=> 6,
				'sys_flow_id'	=> 1,
				'name'			=> 'Simpan Piring Kotor',
				'action'		=> 'test/simpan',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
			)
		);
		DB::table('sys_flow_step')->insert( $sys_flow_step );

		//flow manager
		$sys_flow_manager = array(
			array(
				'id'			=> 1,
				'flow_id'		=> 1,
				'step_id'		=> 1,
				'step_next_id'	=> 2,
				'trigger'		=> '',
				'created_at'	=> new DateTime,
				'updated_at'	=> new DateTime,
			), array(
				'id'			=> 2,
				'flow_id'		=> 1,
				'step_id'		=> 2,
				'step_next_id'	=> 3,
				'trigger'		=> '',
				'created_at'	=> new DateTime,
				'updated_at'	=> new DateTime,
			), array(
				'id'			=> 3,
				'flow_id'		=> 1,
				'step_id'		=> 3,
				'step_next_id'	=> 4,
				'trigger'		=> '',
				'created_at'	=> new DateTime,
				'updated_at'	=> new DateTime,
			), array(
				'id'			=> 4,
				'flow_id'		=> 1,
				'step_id'		=> 4,
				'step_next_id'	=> 5,
				'trigger'		=> '',
				'created_at'	=> new DateTime,
				'updated_at'	=> new DateTime,
			), array(
				'id'			=> 5,
				'flow_id'		=> 1,
				'step_id'		=> 5,
				'step_next_id'	=> 6,
				'trigger'		=> '',
				'created_at'	=> new DateTime,
				'updated_at'	=> new DateTime,
			)
		);
		DB::table('sys_flow_manager')->insert( $sys_flow_manager );

		//application
		$sys_application = array(
			array(
				'id'		 => 1,
				'flow_id'	 => 1,
				'name'		 => 'Rumah Makan',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			)
		);
		DB::table('sys_application')->insert( $sys_application );

	}
}
