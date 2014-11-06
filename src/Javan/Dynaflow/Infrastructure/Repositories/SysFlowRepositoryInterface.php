<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

interface SysFlowRepositoryInterface    
{
    /**
     * Add a new SysFlow
     *
     * @param SysFlow $sysFlow
     * @return void
     */
    public function add($sysFlow);

}
