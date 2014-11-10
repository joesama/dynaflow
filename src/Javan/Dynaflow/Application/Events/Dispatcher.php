<?php  namespace Javan\Dynaflow\Application\Events; 

use Illuminate\Events\Dispatcher as LaravelDispatcher;

class Dispatcher {

    /**
     * @var \Illuminate\Events\Dispatcher
     */
    private $dispatcher;

    public function __construct(LaravelDispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function dispatch(Array $events)
    {
        foreach($events as $event)
        {
            $this->dispatcher->fire($event->name(), [$event]);
        }
    }
} 