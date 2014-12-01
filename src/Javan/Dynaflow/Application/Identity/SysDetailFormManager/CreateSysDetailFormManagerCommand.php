<?php namespace Javan\Dynaflow\Application\Identity\SysDetailFormManager;

use Javan\Dynaflow\Application\Command;

class CreateSysDetailFormManagerCommand implements Command
{
    protected $data;

    /**
     * Create a new CreateDetailSysFormManagerCommand
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
