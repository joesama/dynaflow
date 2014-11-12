<?php namespace Javan\Dynaflow\Application\Identity\SysFlow;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Events\Dispatcher;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Domain\Model\Identity\SysFlow;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlow\SysFlowRepositoryInterface;
use Javan\Dynaflow\Domain\Validators\SysFlowValidator;


class UpdateSysFlowHandler implements Handler
{
    /**
     * @var SysFlowService
     */
    private $sysFlowRepo;

    /**
     * Create a new CreateSysFlowHandler
     *
     * @param CreateSysFlowValidator $validator
     * @param SysFlowRepositoryInterface $sysFlowRepo
     * @param Dispatcher $dispatcher
     * @return void
     */
    public function __construct(SysFlowValidator $validator, SysFlowRepositoryInterface $sysFlowRepo, Dispatcher $dispatcher)
    {
        $this->validator = $validator;
        $this->sysFlowRepo = $sysFlowRepo;
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
        $this->sysFlowRepo->update($command);
    }
}
