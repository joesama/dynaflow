<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

use Javan\Dynaflow\Domain\Model\Identity\SysFlow;
interface SysFlowRepositoryInterface    
{
    public function all();

    /**
     * Add a new SysFlow
     *
     * @param SysFlow $sysFlow
     * @return void
     */
    public function add(SysFlow $sysFlow);

    public function update($sysFlow);

    public function delete($sysFlow);


}
