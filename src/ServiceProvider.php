<?php

namespace Claremontdesign\Cdthememetronic;

/**
 * Dx
 *
 * @link http://dennesabing.com
 * @author Dennes B Abing <dennes.b.abing@gmail.com>
 * @license proprietary
 * @copyright Copyright (c) 2015 ClaremontDesign/MadLabs-Dx
 * @version 0.0.0.1
 * @since Dec 02, 2015
 * @file ServiceProvider.php
 * @project Claremontdesign
 * @package Cdthememetronic
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

	public function register()
	{
		// Register this service
		$this->app->singleton('cdthememetronic', function($app){
			return new Cdthememetronic;
		});
		app('cdbase')->addPackage(\Claremontdesign\Cdthememetronic\Cdthememetronic::class);
	}

	public function boot()
	{
		// Define the path for the view files
		$this->loadViewsFrom(__DIR__ . '/../resources/views', cd_thememetronic_tag());

		$this->publishes([
			__DIR__ . '/../resources/assets' => public_path('assets/claremontdesign/theme/metronic'),
				], 'public');

		$this->publishes([
			__DIR__ . '/../resources/views' => base_path('resources/views/claremontdesign/cdthememetronic'),
				], 'views');

		// Loading the routes file
		require __DIR__ . '/Http/routes.php';
	}

}
