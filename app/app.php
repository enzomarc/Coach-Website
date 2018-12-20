<?php

namespace App;

use App\Router\Router;

/**
 * Represent the application
 * @return App
 */
class App
{

	private $modules = [];
	private $globals = [];

	function __construct(array $modules = [])
	{
		foreach ($modules as $module) {
			$this->modules[] = $module;
		}

		$this->globals['router'] = new Router();
		extract($this->globals);
        require_once __DIR__ . '/../routes/web.php';
	}

	/**
	 * Run a new instance of the application
	 */
	public function run()
	{
        $this->globals['router']->run();
	}

}