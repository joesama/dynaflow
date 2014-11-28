<?php namespace Javan\Dynaflow\Domain\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Entity
 * Table(name="sys_flow_step")
 */
class SysFlowStep extends Model
{
    protected $table = 'sys_flow_step';

    public function flow()
    {
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\SysFlow', 'sys_flow_id');
    }
}
