<?php namespace Javan\Dynaflow\Application\Identity;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Domain\Services\SysFlowService;

class CreateSysFlowHandler implements Handler
{
    /**
     * @var SysFlowService
     */
    private $service;

    /**
     * Create a new CreateSysFlowHandler
     *
     * @param SysFlowService $service
     * @return void
     */
    public function __construct(SysFlowService $service)
    {
        $this->service = $service;
    }

    /**
     * Handle a Command object
     *
     * @param Command $command
     * @return void
     */
    public function handle(Command $command)
    {
        $user = $this->service->register(
            $command->name,
            $command->created_at,
            $command->update_at
        );
    }
}
