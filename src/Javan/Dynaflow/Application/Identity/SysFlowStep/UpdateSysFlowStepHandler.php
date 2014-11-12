<?php namespace Javan\Dynaflow\Application\Identity\SysFlowStep;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Events\Dispatcher;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Domain\Model\Identity\SysFlowStep;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowStepRepositoryInterface;
use Javan\Dynaflow\Domain\Validators\SysFlowStepValidator;

class UpdateSysFlowStepHandler implements Handler
{
    
    private $sysFlowStepRepo;

    /**
     * Create a new CreateSysStepFlowHandler
     *
     * @param SysFlowRepositoryInterface $sysFlowStepRepo
     * @return void
     */
    public function __construct(SysFlowStepValidator $validator, SysFlowStepRepositoryInterface $sysFlowStepRepo, Dispatcher $dispatcher)
    {
        $this->validator = $validator;
        $this->sysFlowStepRepo = $sysFlowStepRepo;
        $this->dispatcher = $dispatcher;
    }

    /**
     * Handle a Command object
     *
     * @param Command $command
     * @return void
     */
    public function handle(Command $command)
    { 
        $this->validate($command);
        $this->register($command);
    }

    protected function validate($command)
    {
        $this->validator->validate($command);
    }

    protected function register($command)
    {   
        $this->sysFlowStepRepo->update($command);
    }
}
