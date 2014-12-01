<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysDetailFormManager;

use Javan\Dynaflow\Domain\Model\SysDetailFormManager;

interface SysDetailFormManagerRepositoryInterface    
{

    /**
     * Add a new SysDetailFormManager
     *
     * @param $sysDetailFormManager
     * @return void
     */
    public function add($sysDetailFormManager);

    /**
     * Update SysDetailFormManager
     *
     * @param $sysDetailFormManager
     * @return void
     */
    public function update($sysDetailFormManager);

    /**
     * Delete SysDetailFormManager
     *
     * @param $sysDetailFormManager
     * @return void
     */
    public function delete($sysDetailFormManager);
}
