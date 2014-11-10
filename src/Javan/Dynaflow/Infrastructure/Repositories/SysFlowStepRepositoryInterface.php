<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

interface SysFlowStepRepositoryInterface    
{
    public function all();

    /**
     * Add a new SysFlowStep
     *
     * @param SysFlowStep $sysFlowStep
     * @return void
     */
    public function add($sysFlowStep);

    public function update($sysFlowStep);

    public function delete($sysFlowStep);
}