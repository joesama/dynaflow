<?php  namespace Javan\Dynaflow\Application\Events; 

interface EventInterface {

    /**
     * Return the event name
     * @return string
     */
    public function name();
} 