<?php namespace Camroncade\Timezone;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class TimezoneServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return null
	 */
	public function boot()
	{
		AliasLoader::getInstance()->alias('Timezone', \Camroncade\Timezone\Facades\Timezone::class);
	}

	/**
	 * Register the service provider.
	 *
	 * @return null
	 */
	public function register()
	{
		$this->app->bind('timezone', Timezone::class);
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
