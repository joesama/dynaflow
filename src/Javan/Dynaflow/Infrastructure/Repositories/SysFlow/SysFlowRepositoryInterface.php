<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysFlow;

use Javan\Dynaflow\Domain\Model\SysFlow;
interface SysFlowRepositoryInterface    
{
    /**
     * All Data 
     *
     * @return void
     */
    public function all();

    /**
     * Add a new SysFlow
     *
     * @param $sysFlow
     * @return void
     */
    public function add($sysFlow);

    /**
     * Update SysFlow
     *
     * @param $sysFlow
     * @return void
     */
    public function update($sysFlow);

    /**
     * Delete SysFlow
     *
     * @param $id
     * @return void
     */
    public function delete($id);


}
