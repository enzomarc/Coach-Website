<?php

namespace App;

use App\Router\Router;

const DEFAULT_NAMESPACE = "App\\Controllers\\";
const VIEW_EXTENSION = '.poison.php';
const VIEWS_PATH =  '../resources/views';

/**
 * Represent the application
 * @return App
 */
class App
{

    /**
     * App constructor.
     */
	function __construct()
	{
	    /* Initialize GLOBALS variables */
		$GLOBALS['router'] = new Router();
		$GLOBALS['poison'] = new Poison(VIEWS_PATH);

		$GLOBALS['poison']->addGlobal('router', $GLOBALS['router']);
		$GLOBALS['poison']->addGlobal('poison', $GLOBALS['poison']);

        require_once __DIR__ . '/../routes/web.php';
	}

	/**
	 * Run a new instance of the application
	 */
	public function run()
	{
	    Router::setDefaultNamespace(DEFAULT_NAMESPACE);
	    Poison::setViewExtension(VIEW_EXTENSION);
        $GLOBALS['router']->run();
	}

}