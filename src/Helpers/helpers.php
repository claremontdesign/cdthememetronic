<?php

/**
 * Dx
 *
 * @link http://dennesabing.com
 * @author Dennes B Abing <dennes.b.abing@gmail.com>
 * @license proprietary
 * @copyright Copyright (c) 2015 ClaremontDesign/MadLabs-Dx
 * @version 0.0.0.1
 * @since Nov 27, 2015 1:43:45 PM
 * @file routes.php
 * @project Claremontdesign
 * @package Einkspread
 */
if(!function_exists('cd_thememetronic'))
{

	function cd_thememetronic()
	{
		return app('cdthememetronic');
	}

}
if(!function_exists('cd_thememetronic_tag'))
{

	/**
	 * Return this packge tag
	 * @return string
	 */
	function cd_thememetronic_tag()
	{
		return 'cdthememetronic';
	}

}
if(!function_exists('cd_thememetronic_template'))
{

	/**
	 * Return this packge template
	 * @return string
	 */
	function cd_thememetronic_template()
	{
		return cd_thememetronic_tag() . '::backend.templates.metronic.template';
	}

}
if(!function_exists('cd_thememetronic_view_name'))
{

	/**
	 * Return this package view name
	 * view(cd_thememetronic_view_name('view-name')) = nhr::view-name
	 * @param string $view The View Name
	 * @return string
	 */
	function cd_thememetronic_view_name($view)
	{
		return cd_thememetronic_tag() . '::backend.templates.metronic.' . $view;
	}

}
if(!function_exists('cd_thememetronic_asset'))
{

	/**
	 * Return the public path to an asset.
	 * 	path to return is relative to package template folder.
	 * 	If you want to return an asset relative to the public folder,
	 * 	use larvel's asset() instead
	 * @param string $asset The asset
	 * @return string
	 */
	function cd_thememetronic_asset($asset = null)
	{
		return asset('assets') . '/claremontdesign/theme/metronic/' . $asset;
	}

}

