<?php

class SysFlowTest extends \PHPUnit_Framework_TestCase
{
    use \Codeception\Specify;

    public function testValidation()
    {
        $user = DB::table('sys_flow_manager')->create();

        $this->specify("name is required", function() {
            $user->name = null;
            $this->assertFalse($user->validate(['name']));
        });

        $this->specify("name is too long", function() {
            $user->username = 'makan';
            $this->assertFalse($user->validate(['name']));
        });

        $this->specify("name is ok", function() {
            $user->username = 'nyetir';
            $this->assertTrue($user->validate(['name']));           
        });     
    }

}