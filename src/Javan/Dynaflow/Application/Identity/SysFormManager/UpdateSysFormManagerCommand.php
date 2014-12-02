<?php namespace Javan\Dynaflow\Application\Identity\SysFormManager;

use Javan\Dynaflow\Application\Command;

class UpdateSysFormManagerCommand implements Command
{
    /**
     * @var string
     */
    protected $data;

    /**
     * Create a new UpdateSysFormManagerCommand
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
