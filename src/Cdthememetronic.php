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
 * @file Cdthememetronic.php
 * @project Claremontdesign
 * @package Cdthememetronic
 */
use Claremontdesign\Cdbase\Cdbase;

class Cdthememetronic extends Cdbase
{

	/**
	 * Return the configuration file
	 */
	public function config()
	{
		return [
			__DIR__ . '/../config/config.php'
		];
	}

}
