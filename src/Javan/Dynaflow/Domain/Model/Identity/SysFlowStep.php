<?php namespace Javan\Dynaflow\Domain\Model\Identity;

use Illuminate\Database\Eloquent\Model;

/**
 * Entity
 * Table(name="sys_flow")
 */
class SysFlowStep extends Model
{
    protected $table = 'sys_flow_step';

    public function flow()
    {
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\Identity\SysFlow', 'sys_flow_id');
    }
}
