<?php namespace Javan\Dynaflow\Application\Identity\SysFormManager;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Events\Dispatcher;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Infrastructure\Repositories\SysFormManager\SysFormManagerRepositoryInterface;
use Javan\Dynaflow\Domain\Validators\SysFormManagerValidator;


class UpdateSysFormManagerHandler implements Handler
{
    /**
     * @var sysFormManagerRepo
     */
    private $sysFormManagerRepo;

    /**
     * Create a new UpdateSysFormManagerHandler
     *
     * @param SysFormManagerValidator $validator
     * @param SysFormManagerRepositoryInterface $sysFormManagerRepo
     * @param Dispatcher $dispatcher
     * @return void
     */
    public function __construct(SysFormManagerValidator $validator, SysFormManagerRepositoryInterface $sysFormManagerRepo, Dispatcher $dispatcher)
    {
        $this->validator = $validator;
        $this->sysFormManagerRepo = $sysFormManagerRepo;
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

    /**
     * validate object
     *
     * @param $command
     * @return void
     */
    protected function validate($command)
    {
        $this->validator->validate($command);
    }

    /**
     * register object
     *
     * @param $command
     * @return void
     */
    protected function register($command)
    {
        $this->sysFormManagerRepo->update($command);
    }
}
