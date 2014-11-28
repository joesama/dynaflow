<?php namespace Javan\Dynaflow\Domain\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Entity
 * Table(name="sys_flow_manager")
 */
class SysFlowManager extends Model
{
    protected $table = 'sys_flow_manager'; 

    public function step()
    {
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\SysFlowStep', 'step_id');
    }

    public function nextStep()
    {
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\SysFlowStep', 'step_next_id');
    }

    public function flow()
    {
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\SysFlow', 'flow_id');
    }
    
}
