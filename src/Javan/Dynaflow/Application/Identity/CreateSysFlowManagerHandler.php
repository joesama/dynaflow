<?php namespace Javan\Dynaflow\Application\Identity;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Domain\Model\Identity\SysFlowManager;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowManagerRepositoryInterface;

class CreateSysFlowManagerHandler implements Handler
{
    /**
     * @var SysFlowService
     */
    private $sysFlowManagerRepo;

    /**
     * Create a new CreateSysFlowHandler
     *
     * @param SysFlowService $service
     * @return void
     */
    public function __construct(SysFlowManagerRepositoryInterface $sysFlowManagerRepo)
    {
        $this->sysFlowManagerRepo = $sysFlowManagerRepo;
    }

    /**
     * Handle a Command object
     *
     * @param Command $command
     * @return void
     */
    public function handle(Command $command)
    {   
        $sysFlow = new SysFlowManager;
        $sysFlow->flow_id = $command->flow_id;
        $sysFlow->step_id = $command->step_id;
        $sysFlow->step_next_id = $command->step_next_id;
        $sysFlow->trigger = $command->trigger;
        
        $this->sysFlowManagerRepo->add($sysFlow);
    }
}
