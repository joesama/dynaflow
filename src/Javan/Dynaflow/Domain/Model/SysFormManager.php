<?php namespace Javan\Dynaflow\Domain\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Entity
 * Table(name="sys_form_manager")
 */
class SysFormManager extends Model
{
    protected $table = 'sys_form_manager';

    public function application(){
    	return $this->belongsTo('Javan\Dynaflow\Domain\Model\SysApplication', 'application_id');
    }

    public function flowStep(){
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\SysFlowStep', 'step_id');
    }
}
