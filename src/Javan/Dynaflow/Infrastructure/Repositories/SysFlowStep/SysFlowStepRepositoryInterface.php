<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysFlowStep;

use Javan\Dynaflow\Domain\Model\Identity\SysFlowStep;

interface SysFlowStepRepositoryInterface    
{

    public function all();

    /**
     * Add a new SysFlowStep
     *
     * @param $sysFlowStep
     * @return void
     */
    public function add($sysFlowStep);

    /**
     * Update SysFlowStep
     *
     * @param $sysFlowStep
     * @return void
     */
    public function update($sysFlowStep);

    /**
     * Delete SysFlowStep
     *
     * @param $sysFlowStep
     * @return void
     */
    public function delete($sysFlowStep);
}
