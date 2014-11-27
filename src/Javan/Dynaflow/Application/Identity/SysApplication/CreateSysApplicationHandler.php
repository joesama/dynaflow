<?php namespace Javan\Dynaflow\Application\Identity\SysApplication;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Events\Dispatcher;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Domain\Model\Identity\SysApplication;
use Javan\Dynaflow\Infrastructure\Repositories\SysApplication\SysApplicationRepositoryInterface;
use Javan\Dynaflow\Domain\Validators\SysApplicationValidator;

class CreateSysApplicationHandler implements Handler
{
    
    private $sysApplicationRepo;

    /**
     * Create a new CreateSysStepFlowHandler
     *
     * @param SysFlowRepositoryInterface $sysApplicationRepo
     * @return void
     */
    public function __construct(SysApplicationValidator $validator, SysApplicationRepositoryInterface $sysApplicationRepo, Dispatcher $dispatcher)
    {
        $this->validator = $validator;
        $this->sysApplicationRepo = $sysApplicationRepo;
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
        $this->sysApplicationRepo->add($command);
    }
}
