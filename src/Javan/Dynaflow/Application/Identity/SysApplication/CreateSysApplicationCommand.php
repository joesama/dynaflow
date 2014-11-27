<?php namespace Javan\Dynaflow\Application\Identity\SysFlowApplication;

use Javan\Dynaflow\Application\Command;

class CreateSysApplicationCommand implements Command
{
    /**
     * @var string
     */
    protected $data;

    /**
     * Create a new CreateSysFlowCommand
     *
     * @param object $data
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
