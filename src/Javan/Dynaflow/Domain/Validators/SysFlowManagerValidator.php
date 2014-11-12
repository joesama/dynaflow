<?php  namespace Javan\Dynaflow\Domain\Validators;

use Illuminate\Validation\Factory;
use Javan\Dynaflow\Validation\ValidationException;
use Javan\Dynaflow\Validation\ValidatorInterface;
use Javan\Dynaflow\Application\Command;

class SysFlowManagerValidator implements ValidatorInterface {

    /**
     * @var \Illuminate\Validation\Factory
     */
    private $validator;

    /**
     * @var array
     */
    protected $rules = [
        'flow_id' => 'required',
        'step_id' => 'required',
        'step_next_id' => 'required',
        'trigger' => 'required'
    ];

    public function __construct(Factory $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param \Hex\CommandBus\CommandInterface $command
     * @throws \Hex\Validation\ValidationException
     */
    public function validate(Command $command)
    {
        $validator = $this->validator->make([
            'flow_id' => $command->flow_id,
            'step_id' => $command->step_id,
            'step_next_id' => $command->step_next_id,
            'trigger' => $command->trigger,
        ], $this->rules);

        if( ! $validator->passes() )
        {
            throw new ValidationException( $validator->errors() );
        }
    }
}