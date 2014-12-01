<?php namespace Javan\Dynaflow\Domain\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Entity
 * Table(name="sys_detail_form_manager")
 */
class SysDetailFormManager extends Model
{
    protected $table = 'sys_detail_form_manager';

    public static function getType(){
    	return array(
    		1 => 'Text Box',
    		2 => 'Dropdown',
    		3 => 'Radio Button',
    		4 => 'Text Area',
            5 => 'Check Box'
    		);
    }

    public function getTypeLabel(){
        switch ($this->type) {
            case 1:
                return 'Text Box';
                break;
            case 2:
                return 'Dropdown';
                break;
            case 3:
                return 'Radio Button';
                break;
            case 4:
                return 'Text Area';
                break;
            case 5:
                return 'Check Box';
                break;
        }
    }
}
