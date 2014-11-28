<?php namespace Javan\Dynaflow\Domain\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Entity
 * Table(name="sys_application")
 */
class SysApplication extends Model
{
	use \Javan\Dynaflow\Application\Events\Eventable;

    protected $table = 'sys_application'; 

    public function flow()
    {
        return $this->belongsTo('Javan\Dynaflow\Domain\Model\SysFlow', 'flow_id');
    }
    
}
