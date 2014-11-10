<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

interface SysFlowManagerRepositoryInterface    
{
    public function all($flow_id);

    /**
     * Add a new SysFlowManager
     *
     * @param SysFlowStep $sysFlowManager
     * @return void
     */
    public function add($sysFlowManager);

    public function update($list_order);

    public function delete($id);
}
