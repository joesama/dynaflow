<?php namespace Javan\Dynaflow\Application\Identity;

use Javan\Dynaflow\Gettable;
use Javan\Dynaflow\Application\Command;

class CreateSysFlowCommand implements Command
{
    use Gettable;

    /**
     * @var string
     */
    protected $data;

    /**
     * Create a new CreateSysFlowCommand
     *
     * @param string $name
     * @param datetime $created_at
     * @param datetime $update_at
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
