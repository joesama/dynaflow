<?php namespace Javan\Dynaflow\Application;

interface Container
{
    /**
     * Return a new instance of an object
     *
     * @param string $class
     * @return mixed
     */
    public function make($class);
}
