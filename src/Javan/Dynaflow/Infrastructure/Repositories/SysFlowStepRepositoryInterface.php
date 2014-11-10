<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

use Javan\Dynaflow\Domain\Model\Identity\SysFlowStep;

interface SysFlowStepRepositoryInterface    
{
    public function all();

    /**
     * Add a new SysFlowStep
     *
     * @param SysFlowStep $sysFlowStep
     * @return void
     */
    public function add(SysFlowStep $sysFlowStep);

    public function update($sysFlowStep);

    public function delete($sysFlowStep);
}
