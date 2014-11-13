<?php  namespace Javan\Dynaflow\Domain\Validators;

use Illuminate\Validation\Factory;
use Javan\Dynaflow\Validation\ValidationException;
use Javan\Dynaflow\Validation\ValidatorInterface;
use Javan\Dynaflow\Application\Command;

class SysFlowStepValidator implements ValidatorInterface {

    /**
     * @var \Illuminate\Validation\Factory
     */
    private $validator;

    /**
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'sys_flow_id' => 'required',
        'action' => 'required'
    ];

    public function __construct(Factory $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param Javan\Dynaflow\Application\Command $command
     * @throws Javan\Dynaflow\Validation\ValidationException
     */
    public function validate(Command $command)
    {
        $validator = $this->validator->make([
            'name' => $command->name,
            'sys_flow_id' => $command->sys_flow_id,
            'action' => $command->action
        ], $this->rules);

        if( ! $validator->passes() )
        {
            throw new ValidationException( $validator->errors() );
        }
    }
}