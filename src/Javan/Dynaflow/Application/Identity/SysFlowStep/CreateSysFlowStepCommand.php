<?php namespace Javan\Dynaflow\Application\Identity\SysFlowStep;

use Javan\Dynaflow\Gettable;
use Javan\Dynaflow\Application\Command;

class CreateSysFlowStepCommand implements Command
{
    use Gettable;

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
