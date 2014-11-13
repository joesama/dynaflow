<?php namespace Javan\Dynaflow\Application\Identity\SysFlowManager;

use Javan\Dynaflow\Gettable;
use Javan\Dynaflow\Application\Command;

class CreateSysFlowManagerCommand implements Command
{
    use Gettable;

    protected $data;

    /**
     * Create a new CreateSysFlowManagerCommand
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
