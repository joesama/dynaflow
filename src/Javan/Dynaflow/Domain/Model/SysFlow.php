<?php namespace Javan\Dynaflow\Domain\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Entity
 * Table(name="sys_flow")
 */
class SysFlow extends Model
{
	use \Javan\Dynaflow\Application\Events\Eventable;

    protected $table = 'sys_flow'; 
    
}
