<?php

namespace App;

require_once '../routes/web.php';

use Pecee\SimpleRouter\SimpleRouter;

/**
 * Represent the application
 * @return App
 */
class App
{

	private $modules = [];

	function __construct(array $modules = [])
	{
		foreach ($modules as $module) {
			$this->modules[] = $module;
		}
	}

	/**
	 * Run a new instance of the application
	 */
	public function run()
	{
		SimpleRouter::start();
	}

}