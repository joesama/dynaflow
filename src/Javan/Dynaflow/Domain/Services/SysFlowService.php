<?php namespace Javan\Dynaflow\Domain\Services;

use Javan\Dynaflow\Infrastructure\Repositories\SysFlowRepositoryInterface as SysFlowRepositoryInterface;
use Javan\Dynaflow\Domain\Model\Identity\SysFlow;
class SysFlowService{

	/**
     * @var SysFlowRepository
     */
    private $sysFlowRepository;

    /**
     * Create a new SysFlowService
     *
     * @param SysFlowRepository $userRepository
     * @return void
     */
    public function __construct(SysFlowRepositoryInterface $sysFlowRepository)
    {
        $this->sysFlowRepository = $sysFlowRepository;
    }

    /**
     * Register a new SysFlow
     *
     * @param string $name
     * @param string $created_at
     * @param string $update_at
     * @return void
     */
    public function add($command)
    {
        return $this->sysFlowRepository->add($command);
    }
}