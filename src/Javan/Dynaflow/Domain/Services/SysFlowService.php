<?php namespace Javan\Dynaflow\Domain\Services;

use Javan\Dynaflow\Infrastructure\Repositories\SysFlowDoctrineORMRRepository;
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
    public function __construct(SysFlowDoctrineORMRRepository $sysFlowRepository)
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
    public function register($name, $created_at, $update_at)
    {
        $sysFlow = SysFlow::register($name, $created_at, $update_at);
        $this->sysFlowRepository->add($sysFlow);
        return $sysFlow;
    }
}