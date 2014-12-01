<?php namespace Javan\Dynaflow\Application\Identity\SysDetailFormManager;

use Javan\Dynaflow\Application\Command;
use Javan\Dynaflow\Application\Handler;
use Javan\Dynaflow\Domain\Model\Identity\SysDetailFormManager;
use Javan\Dynaflow\Infrastructure\Repositories\SysDetailFormManager\SysDetailFormManagerRepositoryInterface;
use Javan\Dynaflow\Domain\Validators\SysDetailFormManagerValidator;

class CreateSysDetailFormManagerHandler implements Handler
{
    /**
     * @var SysDetailFormManagerRepositoryInterface
     */
    private $sysDetailFormManagerRepo;

    /**
     * Create a new CreateSysDetailFormManagerHandler
     *
     * @param SysDetailFormManagerValidator $validator
     * @param SysDetailFormManagerRepositoryInterface $sysDetailFormManagerRepo
     * @return void
     */
    public function __construct(SysDetailFormManagerValidator $validator, SysDetailFormManagerRepositoryInterface $sysDetailFormManagerRepo)
    {
        $this->sysDetailFormManagerRepo = $sysDetailFormManagerRepo;
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
        $this->sysDetailFormManagerRepo->add($command);
    }
}
