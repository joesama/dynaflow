<?php namespace Javan\Dynaflow\Domain\Model\Identity;

use Illuminate\Database\Eloquent\Model;

/**
 * Entity
 * Table(name="sys_flow_step")
 */
class SysApplication extends Model
{
    protected $table = 'sys_application';

    public function flow()
    {
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\Identity\SysFlow', 'flow_id');
    }
}
