<?php  namespace Javan\Dynaflow\Validation;

use Javan\Dynaflow\Application\Command;

interface ValidatorInterface {

    public function validate(Command $command);
} 