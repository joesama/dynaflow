<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysFlowManager;

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

    public function drag($list_order);

    public function step();

    public function delete($id);
}
