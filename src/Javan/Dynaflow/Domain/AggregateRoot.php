<?php namespace Javan\Dynaflow\Domain;

interface AggregateRoot
{
    /**
     * Add an event to the pending events
     *
     * @param Event $event
     * @return void
     */
    public function record(Event $event);

    /**
     * Release the events
     *
     * @return array
     */
    public function release();
}
