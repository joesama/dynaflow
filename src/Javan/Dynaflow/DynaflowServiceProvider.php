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

		$this->app->bind('Javan\Dynaflow\Application\CommandBus', function()
        {
            return new Application\CommandBus( $this->app, new Application\NameInflector );
        });

	  	$this->app->bind('Javan\Dynaflow\Infrastructure\Repositories\SysFlowRepositoryInterface', function()
	    {
	        return new Infrastructure\Repositories\SysFlowRepository( 
	        	new Domain\Model\Identity\SysFlow 
	        );
	    });

	    $this->app->bind('Javan\Dynaflow\Infrastructure\Repositories\SysFlowStepRepositoryInterface', function()
	    {
	        return new Infrastructure\Repositories\SysFlowStepRepository( 
	        	new Domain\Model\Identity\SysFlowStep 
	        );
	    });

	  	$this->app->bind('Javan\Dynaflow\Infrastructure\Repositories\SysFlowManagerRepositoryInterface', function()
	    {
	        return new Infrastructure\Repositories\SysFlowManagerRepository( 
	        	new Domain\Model\Identity\SysFlowManager 
	        );
	    });

	  	$this->app->booting(function()
		{
		  	$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  	$loader->alias('CreateSysFlowCommand', 'Javan\Dynaflow\Application\Identity\CreateSysFlowCommand');
		});

		$this->app->booting(function()
		{
		  	$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  	$loader->alias('CreateSysFlowStepCommand', 'Javan\Dynaflow\Application\Identity\CreateSysFlowStepCommand');
		});

		$this->app->booting(function()
		{
		  	$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  	$loader->alias('CreateSysFlowManagerCommand', 'Javan\Dynaflow\Application\Identity\CreateSysFlowManagerCommand');
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
