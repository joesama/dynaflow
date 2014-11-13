<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysFlowManager;

interface SysFlowManagerRepositoryInterface    
{
    /**
     * All Data 
     *
     * @param $flow_id
     * @return void
     */
    public function all($flow_id);

    /**
     * Add a new SysFlowManager
     *
     * @param $sysFlowManager
     * @return void
     */
    public function add($sysFlowManager);

    /**
     * drag
     *
     * @param $list_order
     * @return void
     */
    public function drag($list_order);

    /**
     * Step
     *
     * @return void
     */
    public function step();

    /**
     * Delete
     *
     * @param $id
     * @return void
     */
    public function delete($id);
}
