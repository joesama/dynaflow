<?php namespace Javan\Dynaflow;

trait Gettable
{
    /**
     * Get the private attributes
     *
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->$key;
        }
    }
}
