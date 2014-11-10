<?php namespace Javan\Dynaflow\Application\Identity;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Events\Dispatcher;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Domain\Model\Identity\SysFlow;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowRepositoryInterface;
use Javan\Dynaflow\Domain\Validators\CreateSysFlowValidator;


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
    public function __construct(CreateSysFlowValidator $validator, SysFlowRepositoryInterface $sysFlowRepo, Dispatcher $dispatcher)
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
        $this->save($command);
    }

    protected function validate($command)
    {
        $this->validator->validate($command);
    }

    protected function save($command)
    {
        $sysFlow = new SysFlow;
        $sysFlow->name = $command->name;

        $this->sysFlowRepo->add($sysFlow);

        $this->dispatcher->dispatch( $sysFlow->flushEvents() );
    }
}
