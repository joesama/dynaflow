<?php  namespace Javan\Dynaflow\Domain\Validators;

use Illuminate\Validation\Factory;
use Javan\Dynaflow\Validation\ValidationException;
use Javan\Dynaflow\Validation\ValidatorInterface;
use Javan\Dynaflow\Application\Command;

class SysFlowValidator implements ValidatorInterface {

    /**
     * @var \Illuminate\Validation\Factory
     */
    private $validator;

    /**
     * @var array
     */
    protected $rules = [
        'name' => 'required',
    ];

    public function __construct(Factory $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param \Javan\Dynaflow\CommandBus\Command $command
     * @throws \Javan\Dynaflow\Validation\ValidationException
     */
    public function validate(Command $command)
    {
        $validator = $this->validator->make([
            'name' => $command->name,
        ], $this->rules);

        if( ! $validator->passes() )
        {
            throw new ValidationException( $validator->errors() );
        }
    }
}