<?php namespace Javan\Dynaflow\Application\Identity;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Domain\Model\Identity\SysFlowStep;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowStepRepositoryInterface;

class CreateSysFlowStepHandler implements Handler
{
    
    private $sysFlowStepRepo;

    /**
     * Create a new CreateSysStepFlowHandler
     *
     * @param SysFlowRepositoryInterface $sysFlowStepRepo
     * @return void
     */
    public function __construct(SysFlowStepRepositoryInterface $sysFlowStepRepo)
    {
        $this->sysFlowStepRepo = $sysFlowStepRepo;
    }

    /**
     * Handle a Command object
     *
     * @param Command $command
     * @return void
     */
    public function handle(Command $command)
    {   
        $sysFlow = new SysFlowStep; 
        
        $this->sysFlowStepRepo->add($command);
    }
}
