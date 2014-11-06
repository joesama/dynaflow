<?php namespace Javan\Dynaflow;

use Illuminate\Support\ServiceProvider;

class DynaflowServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('javan/dynaflow', 'dynaflow');
		include __DIR__.'/../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	  	$this->app->bind('Javan\Dynaflow\Application\Container', 'Javan\Dynaflow\Application\LaravelContainer');
	  	$this->app->bind('Javan\Dynaflow\Application\Inflector', 'Javan\Dynaflow\Application\NameInflector');
	  	$this->app->bind('Javan\Dynaflow\Infrastructure\Repositories\SysFlowRepositoryInterface', 'Javan\Dynaflow\Infrastructure\Repositories\SysFlowRepository');

	  	$this->app->bind('Javan\Dynaflow\Infrastructure\Repositories\SysFlowRepositoryInterface', function()
	    {
	        return new Infrastructure\Repositories\SysFlowRepository( 
	        	new Domain\Model\Identity\SysFlow 
	        );
	    });

	  	$this->app->booting(function()
		{
		  	$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  	$loader->alias('CreateSysFlowCommand', 'Javan\Dynaflow\Application\Identity\CreateSysFlowCommand');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
