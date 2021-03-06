<?php  namespace Javan\Dynaflow\Domain\Validators;

use Illuminate\Validation\Factory;
use Javan\Dynaflow\Validation\ValidationException;
use Javan\Dynaflow\Validation\ValidatorInterface;
use Javan\Dynaflow\Application\Command;

class SysFormManagerValidator implements ValidatorInterface {

    /**
     * @var \Illuminate\Validation\Factory
     */
    private $validator;

    /**
     * @var array
     */
    protected $rules = [
        'application_id' => 'required',
        'step_id' => 'required',
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
            'application_id' => $command->application_id,
            'step_id' => $command->step_id,
        ], $this->rules);

        if( ! $validator->passes() )
        {
            throw new ValidationException( $validator->errors() );
        }
    }
}