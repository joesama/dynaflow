<?php namespace Javan\Dynaflow\Application;

interface Handler
{
    /**
     * Handle a Command object
     *
     * @param Command $command
     * @return void
     */
    public function handle(Command $command);
}
