<?php  namespace Javan\Dynaflow\Domain\Validators;

use Illuminate\Validation\Factory;
use Javan\Dynaflow\Validation\ValidationException;
use Javan\Dynaflow\Validation\ValidatorInterface;
use Javan\Dynaflow\CommandBus\CommandInterface;

class CreateSysFlowStepValidator implements ValidatorInterface {

    /**
     * @var \Illuminate\Validation\Factory
     */
    private $validator;

    /**
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'sys_flow_id' => 'required'
    ];

    public function __construct(Factory $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param \Hex\CommandBus\CommandInterface $command
     * @throws \Hex\Validation\ValidationException
     */
    public function validate(CommandInterface $command)
    {
        $validator = $this->validator->make([
            'name' => $command->name,
            'sys_flow_id' => $command->sys_flow_id,
        ], $this->rules);

        if( ! $validator->passes() )
        {
            throw new ValidationException( $validator->errors() );
        }
    }
}