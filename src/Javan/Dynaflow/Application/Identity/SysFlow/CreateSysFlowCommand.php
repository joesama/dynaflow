<?php namespace Javan\Dynaflow\Application\Identity\SysFlow;

use Javan\Dynaflow\Application\Command;

class CreateSysFlowCommand implements Command
{
    protected $data;

    /**
     * Create a new CreateSysFlowCommand
     *
     * @param string data
     * @return void
     */
    public function __construct($data)
    {
        $this->data    = $data;
    }

    public function __get($property){
        return $this->data[$property];
    }
}
