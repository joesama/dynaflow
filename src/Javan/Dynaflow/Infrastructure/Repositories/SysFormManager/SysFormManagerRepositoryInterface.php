<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysFormManager;

use Javan\Dynaflow\Domain\Model\SysFormManager;

interface SysFormManagerRepositoryInterface    
{

    public function all();

    /**
     * Add a new SysFormManager
     *
     * @param $sysFormManager
     * @return void
     */
    public function add($sysFormManager);

    /**
     * Update SysFormManager
     *
     * @param $sysFormManager
     * @return void
     */
    public function update($sysFormManager);

    /**
     * Delete SysFormManager
     *
     * @param $sysFormManager
     * @return void
     */
    public function delete($sysFormManager);
}
