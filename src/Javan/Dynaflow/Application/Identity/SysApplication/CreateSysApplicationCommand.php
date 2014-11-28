<?php namespace Javan\Dynaflow\Application\Identity\SysApplication;

use Javan\Dynaflow\Application\Command;

class CreateSysApplicationCommand implements Command
{
    /**
     * @var string
     */
    protected $data;

    /**
     * Create a new CreateSysApplicationCommand
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
