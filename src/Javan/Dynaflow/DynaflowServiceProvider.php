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
		include __DIR__.'/../../filters.php';
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

	  	$this->app->bind('Javan\Dynaflow\Infrastructure\Repositories\SysFlow\SysFlowRepositoryInterface', 'Javan\Dynaflow\Infrastructure\Repositories\SysFlow\SysFlowRepository');

	    $this->app->bind('Javan\Dynaflow\Infrastructure\Repositories\SysFlowStep\SysFlowStepRepositoryInterface', 'Javan\Dynaflow\Infrastructure\Repositories\SysFlowStep\SysFlowStepRepository');

	  	$this->app->bind('Javan\Dynaflow\Infrastructure\Repositories\SysFlowManager\SysFlowManagerRepositoryInterface', 'Javan\Dynaflow\Infrastructure\Repositories\SysFlowManager\SysFlowManagerRepository');

	  	$this->app->bind('Javan\Dynaflow\Infrastructure\Repositories\SysFormManager\SysFormManagerRepositoryInterface', 'Javan\Dynaflow\Infrastructure\Repositories\SysFormManager\SysFormManagerRepository');

	  	$this->app->booting(function()
		{
		  	$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  	$loader->alias('CreateSysFlowCommand', 'Javan\Dynaflow\Application\Identity\SysFlow\CreateSysFlowCommand');
		  	$loader->alias('UpdateSysFlowCommand', 'Javan\Dynaflow\Application\Identity\SysFlow\UpdateSysFlowCommand');
		  	$loader->alias('CreateSysFlowStepCommand', 'Javan\Dynaflow\Application\Identity\SysFlowStep\CreateSysFlowStepCommand');
		  	$loader->alias('UpdateSysFlowStepCommand', 'Javan\Dynaflow\Application\Identity\SysFlowStep\UpdateSysFlowStepCommand');
		  	$loader->alias('CreateSysFlowManagerCommand', 'Javan\Dynaflow\Application\Identity\SysFlowManager\CreateSysFlowManagerCommand');
		  	$loader->alias('CreateSysFormManagerCommand', 'Javan\Dynaflow\Application\Identity\SysFormManager\CreateSysFormManagerCommand');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('dynaflow');
	}

}
