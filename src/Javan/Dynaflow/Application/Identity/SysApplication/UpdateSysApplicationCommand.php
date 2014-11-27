<?php namespace Javan\Dynaflow\Application\Identity\SysApplication;

use Javan\Dynaflow\Application\Command;

class UpdateSysApplicationCommand implements Command
{
    protected $data;

    /**
     * UpdateSysApplicationCommand
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
