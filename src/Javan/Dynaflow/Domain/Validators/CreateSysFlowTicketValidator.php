<?php  namespace Hex\Tickets\Validators;

use Illuminate\Validation\Factory;
use Hex\Validation\ValidationException;
use Hex\Validation\ValidatorInterface;
use Hex\CommandBus\CommandInterface;

class CreateSysFlowTicketValidator implements ValidatorInterface {

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
     * @param \Hex\CommandBus\CommandInterface $command
     * @throws \Hex\Validation\ValidationException
     */
    public function validate(CommandInterface $command)
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