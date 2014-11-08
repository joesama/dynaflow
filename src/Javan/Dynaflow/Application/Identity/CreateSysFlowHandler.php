<?php namespace Javan\Dynaflow\Application\Identity;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Domain\Model\Identity\SysFlow;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowRepositoryInterface;

class CreateSysFlowHandler implements Handler
{
    /**
     * @var SysFlowService
     */
    private $sysFlowRepo;

    /**
     * Create a new CreateSysFlowHandler
     *
     * @param SysFlowService $service
     * @return void
     */
    public function __construct(SysFlowRepositoryInterface $sysFlowRepo)
    {
        $this->sysFlowRepo = $sysFlowRepo;
    }

    /**
     * Handle a Command object
     *
     * @param Command $command
     * @return void
     */
    public function handle(Command $command)
    {   
        $sysFlow = new SysFlow;
        $sysFlow->name = $command->name;
        
        $this->sysFlowRepo->add($sysFlow);
    }
}
