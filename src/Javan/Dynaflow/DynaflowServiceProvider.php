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
		$this->package('javan/dynaflow', 'doctrine', __DIR__ . '/..');
		include __DIR__.'/../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['dynaflow'] = $this->app->share(function($app)
	  	{
	    	return new Dynaflow;
	  	});

	  	$this->app->bind('Javan\Dynaflow\Application\Container', 'Javan\Dynaflow\Application\LaravelContainer');
	  	$this->app->bind('Javan\Dynaflow\Application\Inflector', 'Javan\Dynaflow\Application\NameInflector');

	  	$this->app->booting(function()
		{
		  	$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  	$loader->alias('CreateSysFlowCommand', 'Javan\Dynaflow\Application\Identity\CreateSysFlowCommand');
		});

		$this->commands([
            'Javan\Dynaflow\Application\Identity\CreateSysFlowCommand',
        ]);
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
