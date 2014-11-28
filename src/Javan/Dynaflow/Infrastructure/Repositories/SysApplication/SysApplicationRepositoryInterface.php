<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysApplication;

use Javan\Dynaflow\Domain\Model\SysApplication;

interface SysApplicationRepositoryInterface    
{

    public function all();

    public function add($sysApplication);

    public function update($sysApplication);

    public function delete($sysApplication);
}
