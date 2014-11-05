<?php namespace Javan\Dynaflow\Domain\Model\Identity;

interface SysFlowRepository    
{
    /**
     * Add a new SysFlow
     *
     * @param SysFlow $sysFlow
     * @return void
     */
    public function add(SysFlow $sysFlow);

    /**
     * Update an existing SysFlow
     *
     * @param SysFlow $sysFlow
     * @return void
     */
    public function update(SysFlow $sysFlow);
}
