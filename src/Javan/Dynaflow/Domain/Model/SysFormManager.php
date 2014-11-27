<?php namespace Javan\Dynaflow\Domain\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Entity
 * Table(name="sys_form_manager")
 */
class SysFormManager extends Model
{
	use \Javan\Dynaflow\Application\Events\Eventable;

    protected $table = 'sys_form_manager'; 
    
}
