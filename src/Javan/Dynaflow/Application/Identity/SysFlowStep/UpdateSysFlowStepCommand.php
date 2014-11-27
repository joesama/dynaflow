<?php namespace Javan\Dynaflow\Application\Identity\SysFlowStep;

use Javan\Dynaflow\Application\Command;

class UpdateSysFlowStepCommand implements Command
{
    protected $data;

    /**
     * UpdateSysFlowStepCommand
     *
     * @param $data
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
