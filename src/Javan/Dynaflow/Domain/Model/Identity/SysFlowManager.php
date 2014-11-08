<?php namespace Javan\Dynaflow\Domain\Model\Identity;

use Illuminate\Database\Eloquent\Model;

/**
 * Entity
 * Table(name="sys_flow")
 */
class SysFlowManager extends \Eloquent
{
    protected $table = 'sys_flow_manager'; 

    public function step()
    {
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\Identity\SysFlowStep', 'step_id');
    }

    public function nextStep()
    {
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\Identity\SysFlowStep', 'step_next_id');
    }

    public function flow()
    {
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\Identity\SysFlow', 'flow_id');
    }
    
}
