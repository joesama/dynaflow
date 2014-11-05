<?php namespace Javan\Dynaflow\Application\Identity;

use Javan\Dynaflow\Gettable;
use Javan\Dynaflow\Application\Command;

class CreateSysFlowCommand implements Command
{
    use Gettable;

    /**
     * @var string
     */
    private $name;

    /**
     * @var datetime
     */
    private $created_at;

    /**
     * @var datetime
     */
    private $update_at;

    /**
     * Create a new CreateSysFlowCommand
     *
     * @param string $name
     * @param datetime $created_at
     * @param datetime $update_at
     * @return void
     */
    public function __construct($name, $created_at, $update_at)
    {
        $this->name    = $name;
        $this->created_at = $created_at;
        $this->update_at = $update_at;
    }
}
