<?php namespace Javan\Ims\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Ims extends Facade {
 
  	/**
   	* Get the registered name of the component.
   	*
   	* @return string
   	*/
  	protected static function getFacadeAccessor() { 
  		return 'ims'; 
  	}
 
}