<?php namespace Javan\Dynaflow\Application\Identity\SysFlowManager;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Domain\Model\Identity\SysFlowManager;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowManager\SysFlowManagerRepositoryInterface;
use Javan\Dynaflow\Domain\Validators\SysFlowManagerValidator;

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
    public function __construct(SysFlowManagerValidator $validator, SysFlowManagerRepositoryInterface $sysFlowManagerRepo)
    {
        $this->sysFlowManagerRepo = $sysFlowManagerRepo;
        $this->validator = $validator;
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
        $this->sysFlowManagerRepo->add($command);
    }
}
